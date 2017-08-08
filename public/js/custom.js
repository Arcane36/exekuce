$(document).ready(function() {
    /* Placeholders.js v4.0.1 */
    !function(a){"use strict";function b(){}function c(){try{return document.activeElement}catch(a){}}function d(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return!0;return!1}function e(a,b,c){return a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent?a.attachEvent("on"+b,c):void 0}function f(a,b){var c;a.createTextRange?(c=a.createTextRange(),c.move("character",b),c.select()):a.selectionStart&&(a.focus(),a.setSelectionRange(b,b))}function g(a,b){try{return a.type=b,!0}catch(c){return!1}}function h(a,b){if(a&&a.getAttribute(B))b(a);else for(var c,d=a?a.getElementsByTagName("input"):N,e=a?a.getElementsByTagName("textarea"):O,f=d?d.length:0,g=e?e.length:0,h=f+g,i=0;h>i;i++)c=f>i?d[i]:e[i-f],b(c)}function i(a){h(a,k)}function j(a){h(a,l)}function k(a,b){var c=!!b&&a.value!==b,d=a.value===a.getAttribute(B);if((c||d)&&"true"===a.getAttribute(C)){a.removeAttribute(C),a.value=a.value.replace(a.getAttribute(B),""),a.className=a.className.replace(A,"");var e=a.getAttribute(I);parseInt(e,10)>=0&&(a.setAttribute("maxLength",e),a.removeAttribute(I));var f=a.getAttribute(D);return f&&(a.type=f),!0}return!1}function l(a){var b=a.getAttribute(B);if(""===a.value&&b){a.setAttribute(C,"true"),a.value=b,a.className+=" "+z;var c=a.getAttribute(I);c||(a.setAttribute(I,a.maxLength),a.removeAttribute("maxLength"));var d=a.getAttribute(D);return d?a.type="text":"password"===a.type&&g(a,"text")&&a.setAttribute(D,"password"),!0}return!1}function m(a){return function(){P&&a.value===a.getAttribute(B)&&"true"===a.getAttribute(C)?f(a,0):k(a)}}function n(a){return function(){l(a)}}function o(a){return function(){i(a)}}function p(a){return function(b){return v=a.value,"true"===a.getAttribute(C)&&v===a.getAttribute(B)&&d(x,b.keyCode)?(b.preventDefault&&b.preventDefault(),!1):void 0}}function q(a){return function(){k(a,v),""===a.value&&(a.blur(),f(a,0))}}function r(a){return function(){a===c()&&a.value===a.getAttribute(B)&&"true"===a.getAttribute(C)&&f(a,0)}}function s(a){var b=a.form;b&&"string"==typeof b&&(b=document.getElementById(b),b.getAttribute(E)||(e(b,"submit",o(b)),b.setAttribute(E,"true"))),e(a,"focus",m(a)),e(a,"blur",n(a)),P&&(e(a,"keydown",p(a)),e(a,"keyup",q(a)),e(a,"click",r(a))),a.setAttribute(F,"true"),a.setAttribute(B,T),(P||a!==c())&&l(a)}var t=document.createElement("input"),u=void 0!==t.placeholder;if(a.Placeholders={nativeSupport:u,disable:u?b:i,enable:u?b:j},!u){var v,w=["text","search","url","tel","email","password","number","textarea"],x=[27,33,34,35,36,37,38,39,40,8,46],y="#ccc",z="placeholdersjs",A=new RegExp("(?:^|\\s)"+z+"(?!\\S)"),B="data-placeholder-value",C="data-placeholder-active",D="data-placeholder-type",E="data-placeholder-submit",F="data-placeholder-bound",G="data-placeholder-focus",H="data-placeholder-live",I="data-placeholder-maxlength",J=100,K=document.getElementsByTagName("head")[0],L=document.documentElement,M=a.Placeholders,N=document.getElementsByTagName("input"),O=document.getElementsByTagName("textarea"),P="false"===L.getAttribute(G),Q="false"!==L.getAttribute(H),R=document.createElement("style");R.type="text/css";var S=document.createTextNode("."+z+" {color:"+y+";}");R.styleSheet?R.styleSheet.cssText=S.nodeValue:R.appendChild(S),K.insertBefore(R,K.firstChild);for(var T,U,V=0,W=N.length+O.length;W>V;V++)U=V<N.length?N[V]:O[V-N.length],T=U.attributes.placeholder,T&&(T=T.nodeValue,T&&d(w,U.type)&&s(U));var X=setInterval(function(){for(var a=0,b=N.length+O.length;b>a;a++)U=a<N.length?N[a]:O[a-N.length],T=U.attributes.placeholder,T?(T=T.nodeValue,T&&d(w,U.type)&&(U.getAttribute(F)||s(U),(T!==U.getAttribute(B)||"password"===U.type&&!U.getAttribute(D))&&("password"===U.type&&!U.getAttribute(D)&&g(U,"text")&&U.setAttribute(D,"password"),U.value===U.getAttribute(B)&&(U.value=T),U.setAttribute(B,T)))):U.getAttribute(C)&&(k(U),U.removeAttribute(B));Q||clearInterval(X)},J);e(a,"beforeunload",function(){M.disable()})}}(this);

    //Hide IC fieldset
    $('#person_label').click(function(e) {
        e.preventDefault();
        $(this).parent().toggleClass("expanded");
        $('.form-header__fs_ic').hide().prop("disabled", true);
        $('#person').prop("checked", true);
        $('#ic').prop("checked", false);


        $('.form-header__fs_person').show().prop("disabled", false);
    });

    //Hide Person fieldset
    $('#ic_label').click(function(e) {
        e.preventDefault();
        $(this).parent().toggleClass("expanded");
        $('.form-header__fs_ic').show().prop("disabled", false);
        $('#person').prop("checked", false);
        $('#ic').prop("checked", true);

        $('.form-header__fs_person').hide().prop("disabled", true);
    });

    //Return to top button
    $('.card .button').click(function(e) {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    //Accordion toggling
    $('.accordion').click(function(e) {
        $(this).toggleClass("active").next().toggleClass("show");
    });

    //Google chart init
    $(window).resize(function(){
        drawChart();
    });

    //Opening modal window
    $('#terms_a').click(function() {
        $('#myModal').css('display', "block");
    });

    //Closing modal window
    $('.close, .close-btn').click(function() {
        $('#myModal').css('display', "none");
    });

    // // When the user clicks anywhere outside of the modal, close it
    $('body').click(function(e) {
        if (e.target.id == 'myModal') {
            $('#myModal').css('display', "none");
        }

    });

    //Custom text only validation method
    jQuery.validator.addMethod("textonly",
        function(value, element){
            valid = false;
            check = /[^-\.a-zA-Z\s\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02AE]/.test(value);
            if(check==false)
                valid = true;
            return this.optional(element) || valid;
        },$.validator.format("Použijte prosím znaky v abecedě.")
    );

    //Custom date validation method
    $.validator.addMethod("birthday",
        function(value, element) {
            return this.optional(element) || /^(0?[1-9]|[12][0-9]|3[01])\.(0?[1-9]|1[0-2])\.[0-9]{4}$/.test(value);
        },$.validator.format("Opravte datum do správného formátu.")
    );

    //jQuery validations
    $('#main-form').validate({
        errorClass: 'error',
        errorElement: "div",
        //place error after label with checkbox
        errorPlacement: function( label, element ) {
            if( $(element).is(':checkbox') ) {
                label.insertAfter( element.next() );
            } else if( $(element).is(':radio') ) {
                label.insertBefore( 'input[type="submit"]' );
            } else {
                label.insertAfter( element );
            }
        },
        highlight: function(element, errorClass, validClass) {
            if($(element).is(':checkbox')) {
                $(element).parent().addClass('error');
            } else {
                $(element).addClass("errorHighlight");
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            if($(element).is(':checkbox')) {
                $(element).parent().removeClass('error');
            } else {
                $(element).removeClass("errorHighlight");
            }
        },
        rules: {
            name: {
                required: true,
                textonly: true,
                minlength: 2
            },
            lastname: {
                required: true,
                textonly: true,
                minlength: 2
            },
            bday: {
                required: true,
                birthday: true
            },
            ico: {
                required: true,
                number: true,
                maxlength: 8,
                minlength: 4
            },
            terms: "required"
        },
        messages: {
            name: {
                required: "Zadejte jméno",
                minlength: "Jméno musí mít alespoň 2 znaky"
            },
            lastname: {
                required: "Zadejte příjmení",
                minlength: "Příjmení musí mít alespoň 2 znaky"
            },
            bday: {
                required: "Zadejte datum narození",
                birthday: 'Zadejte <em>platné</em> datum narození'
            },
            ico: {
                required: "Zadejte IČO",
                number: "Zadejte IČO",
                maxlength: "IČO může obsahovat maximálně 8 číslic",
                minlength: "IČO musí obsahovat minimálně 4 číslice"
            },
            terms: "Ke kontrole je nutný souhlas s podmínkami"
        }
    });

    // // //IE8 placeholders compatibility
    // $('input').placeholder();


});