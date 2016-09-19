#!/bin/sh

curl --include --request PATCH http://homestead.app/examples/$ID \
  --header "Content-Type: application/json" \
  --data "{
      \"title\":\"Example\",
      \"body\": \"Moderate Success\"
    }"
