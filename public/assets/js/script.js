$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options );
    var thisElement = $(this);
    $({count: settings.start}).animate({count: settings.end}, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
        },
        complete: settings.complete
    });
};
$('#number1').jQuerySimpleCounter({end: 500,duration: 1000});
$('#number2').jQuerySimpleCounter({end: 100,duration: 3000});
$('#number3').jQuerySimpleCounter({end: 25,duration: 2000});
$('#number4').jQuerySimpleCounter({end: 20,duration: 3000});
$('#number5').jQuerySimpleCounter({end: 10,duration: 2000});
$('#number6').jQuerySimpleCounter({end: 5,duration: 1000});

// form validation start 
let name_check = "";
let email_check = "";
let phone_check = "";
let service_check = "";

$("#name").on("keyup change", function(e) {
if($('#name').val().length < 1 ){
$('#name').addClass('validation');
$('#name_check').show();
$('#name_check').html("Name is required*");
name_check = false;
$('#name').focus();
}else if($('#name').val() == ' '){
$('#name').val('');
}
else if($('#name').val().length < 3 || $('#name').val().length > 30 ){
$('#name').addClass('validation');
$('#name_check').show();
$('#name_check').html("Name field accept 3 to 30 characters only*");
name_check = false;
$('#name').focus();
}else{
$('#name').removeClass('validation');
$('#name_check').hide();
name_check = true;
}
});

$("#email").on("keyup change", function(e) {
const email = $('#email').val();
let regex =
/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
let s = email;
if (regex.test(s)) {
$('#email').removeClass('validation');
$('#email_check').hide();
email_check = true;
} 
else if($('#email').val().length < 1 ){
$('#email').addClass('validation');
$('#email_check').show();
$('#email_check').html("Email is required*");
email_check = false;
$('#email').focus();
}
else {
$('#email').addClass('validation');
$('#email_check').show();
$('#email_check').html("Invalid email*");
email_check = false;
$('#email').focus();
}
});

$("#phone").on("keyup change", function(e) {
this.value = this.value.replace(/[^0-9\.]/g,'');
if($('#phone').val().length == 10 ){
$('#phone').removeClass('validation');
$('#phone_check').hide();
phone_check = true;
}else if($('#phone').val().length == 0 ){
$('#phone').addClass('validation');
$('#phone_check').show();
$('#phone_check').html("Phone number is required*");
phone_check = false;
$('#phone').focus();
}else{
$('#phone').addClass('validation');
$('#phone_check').show();
$('#phone_check').html("Phone number must be 10 digit*");
phone_check = false;
$('#phone').focus();
}
});

$('#service').on('change', function() {
if($('#service').find(":selected").val() != 'default'){
$('.form-select').css('color','#D3EAFF');
$('#service').removeClass('validation');
$('#service_check').hide();
service_check = true;
}
else{
$('.form-select').css('color','rgba(255, 255, 255, 0.50)');
$('#service').addClass('validation');
$('#service_check').show();
$('#service_check').html("Select service type*");
service_check = false;
$('#service').focus();
}
});

function validateName(){
if($('#name').val().length < 1 ){
$('#name').addClass('validation');
$('#name_check').show();
$('#name_check').html("Name is required*");
name_check = false;
$('#name').focus();
}else if($('#name').val().length < 3 || $('#name').val().length > 30 ){
$('#name').addClass('validation');
$('#name_check').show();
$('#name_check').html("Name field accept 3 to 30 characters only*");
name_check = false;
$('#name').focus();
}else{
$('#name').removeClass('validation');
$('#name_check').hide();
name_check = true;
}
}

function validateEmail(){
const email = $('#email').val();
let regex =
/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
let s = email;
if (regex.test(s)) {
$('#email').removeClass('validation');
$('#email_check').hide();
email_check = true;
} 
else if($('#email').val().length < 1 ){
$('#email').addClass('validation');
$('#email_check').show();
$('#email_check').html("Email is required*");
email_check = false;
$('#email').focus();
}
else {
$('#email').addClass('validation');
$('#email_check').show();
$('#email_check').html("Invalid email*");
email_check = false;
$('#email').focus();
}
}

function validatePhone(){
let v = $('#phone').val();

if($('#phone').val().length > 9 ){
$('#phone').removeClass('validation');
$('#phone_check').hide();
phone_check = true;
}else if($('#phone').val().length == 0 ){
$('#phone').addClass('validation');
$('#phone_check').show();
$('#phone_check').html("Phone number is required*");
phone_check = false;
$('#phone').focus();
}else if($.isNumeric(v) == false){
$('#phone').val('');
}else{
$('#phone').addClass('validation');
$('#phone_check').show();
$('#phone_check').html("Phone number must be 10 digit");
phone_check = false;
$('#phone').focus();
}
}

function validateService(){
if($('#service').find(":selected").val() != 'default'){
$('.form-select').css('color','#D3EAFF');
$('#service').removeClass('validation');
$('#service_check').hide();
service_check = true;
}
else{
$('.form-select').css('color','rgba(255, 255, 255, 0.50)');
$('#service').addClass('validation');
$('#service_check').show();
$('#service_check').html("Select service type*");
service_check = false;
$('#service').focus();
}
}


$('#submit').on('click', function(){
validateName();
validateEmail();
validatePhone();
validateService();
if (
name_check == true && email_check == true && phone_check == true && service_check == true
) {
       let date = new Date();
let t= (date.toLocaleString('en-IN', {
weekday: 'short', // long, short, narrow
day: 'numeric', // numeric, 2-digit
year: 'numeric', // numeric, 2-digit
month: 'long', // numeric, 2-digit, long, short, narrow 
hour: 'numeric', // numeric, 2-digit
minute: 'numeric', // numeric, 2-digit
second: 'numeric', // numeric, 2-digit
}));

const scriptURL ='https://script.google.com/macros/s/AKfycbwExa-Dfjhv81Vx31gXxL5nnHXcOvtEJKkKskqTf2eNafmjrnYmZsKsxmuIEGfrbLCypg/exec?Timestamp='+t;

const form = document.forms['Contacts']

form.addEventListener('submit', e => {
e.preventDefault()
fetch(scriptURL, { mode: "no-cors",method: 'POST', body: new FormData(form)})
.then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
.catch(error => console.error('Error!', error.message))
});
}
else{
return false;
}
});

// form validation end 
