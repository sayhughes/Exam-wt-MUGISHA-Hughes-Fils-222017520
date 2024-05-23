document.addEventListener("DOMContentLoaded", function() {
    
    const logoutLink = document.getElementById('logout');
    logoutLink.addEventListener('click', function(event) {
        event.preventDefault();

        sessionStorage.removeItem('loggedin');
        window.location.href = 'Login.html';
    });
});

function showMessage1(){
    alert("Waiting to approve your payment, Enjoy!!")
}
function showMessage2(){
    alert("Waiting to approve your payment, Enjoy!!")
}
function showMessage3(){
    alert("Waiting to approve your payment, Enjoy!!")
}
document.getElementById("select-plan1").addEventListener("click", function()
{
window.location.href = "Dashboardphp.php";
});
document.getElementById("select-plan2").addEventListener("click", function()
{
window.location.href = "Dashboardphp.php";
});
document.getElementById("select-plan3").addEventListener("click", function()
{
window.location.href = "Dashboardphp.php";
});