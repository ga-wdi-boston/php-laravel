#!/bin/sh

curl --include --request POST http://homestead.app/examples \
  --header "Content-Type: application/json" \
  --data "{
      \"title\":\"Example 1\",
      \"body\": \"Great Success\"
    }"
