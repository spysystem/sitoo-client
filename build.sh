#!/usr/bin/env bash
set -e

rm -rf .openapi-generator docs lib test > /dev/null 2>&1

docker pull spysystem/openapi-generator:th-spy-master-dev

docker run \
    --user $(id -u):$(id -g) \
    --rm \
    -v ${PWD}:/local \
    spysystem/openapi-generator:th-spy-master-dev \
    generate \
    --generator-name php \
    --config /local/openapi-config.yaml \
    --input-spec /local/openapi.yaml \
    --output /local

git add .openapi-generator lib README.md > /dev/null 2>&1
