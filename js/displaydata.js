function passvalues()
{
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var contactnumber = document.getElementById("contactnumber").value;
    var address = document.getElementById("address").value;
    var checkindate = document.getElementById("checkindate").value;
    var nights = document.getElementById("nights").value;
    var cost = document.getElementById("cost").value;
    var room = document.getElementById("room").value;



    localStorage.setItem("fullname",fullname);
    localStorage.setItem("email",email);
    localStorage.setItem("contactnumber",contactnumber);
    localStorage.setItem("address",address);
    localStorage.setItem("checkindate",checkindate);
    localStorage.setItem("nights",nights);
    localStorage.setItem("cost",cost);
    localStorage.setItem("room",room);
    return false;
}