var username;

$(document).ready(function()
{
    username = $('#username').html();

    pullData();

    $(document).keyup(function(e) {
    	e.preventDefault();
        if (e.which == 13)
            sendMessage();
        else
        	isTyping();
        
    });
});

function pullData()
{
	return "hello";
}

function isTyping()
{
	return "isTyping";
}

function sendMessage()
{
    var text = $('#text').val();

    if (text.length > 0)
    {
        $.post('http://localhost:8000/chats/public/sendMessage', {text: text, username: username}, function()
        {
            $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');
            $('#text').val('');
            notTyping();
        });
    }
}

function notTyping()
{
	
}