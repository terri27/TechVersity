var app = {
    _init_() {
        this.eventListerners();
    },
    eventListerners() {
        $('[id="login"]').submit(e => {
            app.init_login();
            return false; //preventing default form submission
        });
        $('[id="signup"]').submit(e => {
            app.init_signup();
            return false; //preventing default form submission
        })
    },
    init_login() {
        //validating data
        var email = $('[name="email"]').val(),
            pass = $('[name="password"]').val(),
            error = false;
        if (email == '' || pass == '') {
            error = true;
        }
        if (!error) {
            //disabling button
            app.updateBtnState('block', 'Authenticating <i class="fa fa-circle-o-notch fa-spin"></i>');
            //sending request
            var data = {
                email: email, pass: pass, action: "login"
            }
            this.sendRequest(data).then(response => {
                //bringing back the button state
                app.updateBtnState('release', "Login")
                //validating the response data from the api request
                if (response.error) {
                    Wxp_DOM.render(`<div class="alert alert-danger">${response.error}</div>`, '#messages', { animate: { settings: "fade" } })
                }
                if (response.status == 200) {
                    window.location.replace(response.redirect);
                }
            })
        } else {
            Wxp_DOM.render(`<div class="alert alert-info">Please fill all the required details to continue!</div>`, '#messages', { animate: { settings: "fade" } })
        }
    },
    init_signup() {
        //fetching data from form
        var name = $('[name="name"]').val(),
            email = $('[name="email"]').val(),
            pass = $('[name="password"]').val(),
            cpass = $('[name="cPassword"]').val(),
            error = false;
        var tnc = $('[name="t_n_c"]:checked').val() ? $('[name="t_n_c"]:checked').val() : false;
        if (
            (!name || name == '') ||
            (!email || email == '') ||
            (!pass || pass == '') ||
            (!cpass || cpass == '') ||
            (!tnc || tnc == false)
        ) {
            Wxp_DOM.render(`<div class="alert alert-info">Please fill all the required details to continue!</div>`, '#messages', { animate: { settings: "fade" } })
            error = true;
        } else {
            if (pass != cpass) {
                Wxp_DOM.render(`<div class="alert alert-danger">Two passwords don't match!</div>`, '#messages', { animate: { settings: "fade" } })
                error = true;
            }
        }
        if (!error) {
            var data = {
                name: name,
                email: email,
                pass: pass,
                cpass: cpass,
                terms: tnc,
                action: 'signup'
            }
            Wxp_DOM.render('', '#messages', { animate: { settings: "fade" } })
            app.updateBtnState('block', 'Please wait <i class="fa fa-circle-o-notch fa-spin"></i>');
            this.sendRequest(data).then(response => {
                //bringing back the button state
                app.updateBtnState('release', "Create account")
                //validating the response data from the api request
                if (response.error) {
                    Wxp_DOM.render(`<div class="alert alert-danger">${response.error}</div>`, '#messages', { animate: { settings: "fade" } })
                }
                if (response.status == 200) {
                    window.location.replace(response.redirect);
                }
            })
        }

    },
    sendRequest(data) {
        return $.ajax({
            url: './controller/authController.php',
            method: "POST",
            dataType: "JSON",
            data: data,
            error: (a, b) => { alert("Something went wrong while processing your request!") }
        })
    },
    updateBtnState(state, html) {
        if (state == "block") {
            $('[type="submit"]').prop('disabled', true)
                .attr('style', 'cursor: not-allowed !important;')
                .html(html);
        } else if (state == "release") {
            $('[type="submit"]').removeAttr('disabled')
                .removeAttr('style')
                .html(html)
        }

    }
}

app._init_();