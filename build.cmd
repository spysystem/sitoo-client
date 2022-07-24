del /s /q .openapi-generator docs lib test > nul 2>&1

docker pull spysystem/openapi-generator:spy_branch

docker run^
    --rm^
    -v "%cd%":/local^
    spysystem/openapi-generator:spy_branch^
    generate^
    --generator-name php^
    --config /local/src/openapi-config.yaml^
    --input-spec /local/src/openapi.yaml^
    --output /local

git add .openapi-generator lib README.md > nul 2>&1
