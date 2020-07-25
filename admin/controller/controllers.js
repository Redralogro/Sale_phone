function checkRegex() {
    const VAL = document.getElementById('name').value;
    var regex = new RegExp("^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([ ][a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$");

    if (VAL == '') {
        document.getElementById('NAME').innerHTML = '(*)Tên không được để trống';
    } else {
        if (regex.test(VAL)) {

            document.getElementById('NAME').innerHTML = '<i class="fa fa-check-circle" style="color:green;" aria-hidden="true"></i>';
        } else {

            document.getElementById('NAME').innerHTML = '(*)Tên không đúng định dạng!!!!';
            // console.log(document.getElementById('NAME').innerText);
        }
    }

};

function checkPhone_number() {
    const VAL = document.getElementById('phone').value;

    const isVNPhoneMobile = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;
    if (VAL == '') {
        document.getElementById('PhoneNumber').innerHTML = "(*) Số điện thoại không được để trống ";
    } else {
        if (isVNPhoneMobile.test(VAL)) {

            document.getElementById('PhoneNumber').innerHTML = '<i class="fa fa-check-circle" style="color:green;" aria-hidden="true"></i>';
        } else {
            document.getElementById('PhoneNumber').innerHTML = "(*) Số điện thoại không đúng định dạng ";
        }
    }

};

function checkEmail() {
    const VAL = document.getElementById('email').value;

    const isEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (VAL == '') {
        document.getElementById('EMAIL').innerHTML = "(*) Email không được để trống ";
    } else {
        if (isEmail.test(VAL)) {

            document.getElementById('EMAIL').innerHTML = '<i class="fa fa-check-circle" style="color:green;" aria-hidden="true"></i>';
        } else {
            document.getElementById('EMAIL').innerHTML = "(*) Email không đúng định dạng ";
        }
    }

};

function checkPass() {
    const VAL = document.getElementById('pass').value;

    // const ispass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d_@$!%*?&]{8,}$/;
    const ispass = /^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,}$/;
    if (VAL == '') {
        document.getElementById('PASS').innerHTML = "(*) Mật khẩu  không được để trống";
    } else {
        if (ispass.test(VAL)) {

            document.getElementById('PASS').innerHTML = '<i class="fa fa-check-circle" style="color:green;" aria-hidden="true"></i>';
        } else {
            document.getElementById('PASS').innerHTML = "(*) Mật khẩu tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, một chữ cái viết thường, một số và một ký tự đặc biệt ! &commat; &dollar; &percnt; &amp; &ast; &quest;";
        }
    }
};

function Match_password() {
    const VAL = document.getElementById('pass').value;
    const check = document.getElementById('check').value;
    if (check == VAL) {
        if (VAL=='')
        {
            document.getElementById('checkPass').innerHTML ='';
        }else document.getElementById('checkPass').innerHTML = '<i class="fa fa-check-circle" style="color:green;" aria-hidden="true"></i>';
    } else {
        document.getElementById('checkPass').innerHTML = '<p style="color:red;">(*) Mật khẩu  không trùng khớp</p>';
    }
}