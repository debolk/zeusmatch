$(document).ready(function(){
    // Settings: Logout from the app
    $('#logout').click(logout);
});

function logout(event)
{
    event.preventDefault();
    window.location = '/logout';
}
