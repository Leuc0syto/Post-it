let logout = document.querySelector('#logoutBtn');
let form = document.querySelector('#logoutForm');

if (logout){
    logout.addEventListener('click', (e)=>{
        e.preventDefault();
        form.submit();
    })
}
