/*
=============
Navigation
=============
 */
const navOpen = document.querySelector(".nav__hamburger");
const navClose = document.querySelector(".close__toggle");
const menu = document.querySelector(".nav__menu");
const scrollLink = document.querySelectorAll(".scroll-link");
const navContainer = document.querySelector(".nav__menu");

navOpen.addEventListener("click", () => {
    menu.classList.add("open");
    document.body.classList.add("active");
    navContainer.style.left = "0";
    navContainer.style.width = "30rem";
});

navClose.addEventListener("click", () => {
    menu.classList.remove("open");
    document.body.classList.remove("active");
    navContainer.style.left = "-30rem";
    navContainer.style.width = "0";
});

/*
=============
PopUp
=============
 */
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup__close");

if (popup) {
    closePopup.addEventListener("click", () => {
        popup.classList.add("hide__popup");
    });

    window.addEventListener("load", () => {
        setTimeout(() => {
            popup.classList.remove("hide__popup");
        }, 500);
    });
}

/*
=============
Fixed Navigation
=============
 */

const navBar = document.querySelector(".navigation");
const gotoTop = document.querySelector(".goto-top");

// Smooth Scroll
Array.from(scrollLink).map(link => {
    link.addEventListener("click", e => {
        // Prevent Default
        e.preventDefault();

        const id = e.currentTarget.getAttribute("href").slice(1);
        const element = document.getElementById(id);
        const navHeight = navBar.getBoundingClientRect().height;
        const fixNav = navBar.classList.contains("fix__nav");
        let position = element.offsetTop - navHeight;

        if (!fixNav) {
            position = position - navHeight;
        }

        window.scrollTo({
            left: 0,
            top: position,
        });
        navContainer.style.left = "-30rem";
        document.body.classList.remove("active");
    });
});

// Fix NavBar

window.addEventListener("scroll", e => {
    const scrollHeight = window.pageYOffset;
    const navHeight = navBar.getBoundingClientRect().height;
    if (scrollHeight > navHeight) {
        navBar.classList.add("fix__nav");
    } else {
        navBar.classList.remove("fix__nav");
    }

    if (scrollHeight > 300) {
        gotoTop.classList.add("show-top");
    } else {
        gotoTop.classList.remove("show-top");
    }
});


// ==============================================Quanlity========================

jQuery(function($) {

    if (!String.prototype.getDecimals) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if (!match) {
                return 0;
            }
            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
        }
    }

    function wcqi_refresh_quantity_increments() {
        $('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />');
    }

    $(document).on('updated_wc_div', function() {
        wcqi_refresh_quantity_increments();
    });

    $(document).on('click', '.plus, .minus', function() {
        // Get values
        var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
        if (max === '' || max === 'NaN') max = '';
        if (min === '' || min === 'NaN') min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

        // Change the value
        if ($(this).is('.plus')) {
            if (max && (currentVal >= max)) {
                $qty.val(max);
            } else {
                $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
            }
        } else {
            if (min && (currentVal <= min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
            }
        }

        // Trigger change event
        $qty.trigger('change');
    });
    wcqi_refresh_quantity_increments();
});

//================================================