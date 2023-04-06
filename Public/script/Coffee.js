const admin = document.querySelector('#admin-form');
const adminclose = document.querySelector('#admin-close');
const user = document.querySelector('#user-form');
const userclose = document.querySelector('#user-close');
// console.log(admin)
admin.addEventListener("click", function (){
    document.querySelector('.admin-form').style.display = "flex"
})


adminclose.addEventListener("click", function (){
    document.querySelector('.admin-form').style.display = "none"
})

user.addEventListener("click", function (){
    document.querySelector('.user-form').style.display = "flex"
})

userclose.addEventListener("click", function (){
    document.querySelector('.user-form').style.display = "none"
})

function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
