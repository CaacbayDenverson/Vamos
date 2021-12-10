function passvalues()
{
    var fullname = document.getElementById("fname").value;
    localStorage.setItem("fullname",fullname);

    var email = document.getElementById("email").value;
    localStorage.setItem("email",email);

    var contactnumber = document.getElementById("contactnumber").value;
    localStorage.setItem("contactnumber",contactnumber);

    var address = document.getElementById("address").value;
    localStorage.setItem("address",address);

    var checkindate = document.getElementById("checkindate").value;
    localStorage.setItem("checkindate",checkindate);

    var nights = document.getElementById("nights").value;
    localStorage.setItem("nights",nights);

    var cost = document.getElementById("cost").value;
    localStorage.setItem("cost",cost);

    var room = document.getElementById("room ").value;
    localStorage.setItem("room",room);

    return false;
}