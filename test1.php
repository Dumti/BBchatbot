<?php
$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];

curl -XPOST 'https://:your_server_url/message' -d '{
  "user_key": "encryptedUserKey",
  "type": "text",
  "content": "차량번호등록"
}
?>
