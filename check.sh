#!/usr/bin/env bash

set -e

rm native.json me.json | true

ME=$(curl "http://json-api-me.test${1}")
NATIVE=$(curl "http://json-api-native.test${1}")

echo -e "---ME (RAW)---\n${ME}"
echo -e "---NATIVE (RAW)---\n${NATIVE}"

ME=$(echo "${ME}" | jq)
NATIVE=$(echo "${NATIVE}" | jq)

echo "${ME}" > me.json
echo "${NATIVE}" > native.json

echo -e "---ME---\n${ME}"
echo -e "---NATIVE---\n${NATIVE}"

kitty +kitten diff me.json native.json
