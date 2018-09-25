
    <?php
$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];

switch($content)
{
        case "Menu1"
            echo '
            {
            "message":
            {
            "text": "You chose Menu 1."
            },
            "keyboard":
            {
            "type": "buttons",
            "buttons": ["Menu1", "Menu2", "Menu3"]
            }
            }'
            break;
        ?>
