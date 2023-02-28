$(document)
    .on("submit", "form.js-register", function(event) {
  
        event.preventDefault();
        
        var _form = $(this);
        var _error = $(".js-error", _form);
        var dataObj = {
            email: $("input[type='email']", _form).val() ,
            password: $("input[type='password']", _form).val() 

        };

        if (dataObj.email.length < 6) {
           _error
                .text("Please enter a valid email adress")
                .show();
            return false;
        }
        else if (dataObj.password.length < 11) {
            _error
                .text('Please enter a passphrase that is at least 11 characters long')
                .show();
            return false;
        }

        _error.hide();

        $.ajax({
            type: 'POST' ,
            url: 'http://localhost:8090/phploginsystem/ajax/register.php' ,
            data: dataObj ,
            dataType: 'json' ,
            async: true,
        })
        .done(function ajaxDone(data) {
            //whatever data is
            console.log(data);
            if(data.redirect !== undefined) {
               // window.location = data.redirect
               console.log(data.redirect);
            }
            else if (data.error !== undefined ) {
                _error
                    .text(data.error)
                    .show();
            }
        })
        .fail( function ajaxFail(e) {
            // this failed
        })
        .always( function ajaxAlwaysDoThis(data) {
            // always do 
            return false;
        })
})