//====================CALCULATOR START===================


jQuery(document).ready(function () {

    function clearAllFields() {
        jQuery(".anumber").val('');  // প্রথম সংখ্যার ইনপুট খালি করা
        jQuery(".bnumber").val('');  // দ্বিতীয় সংখ্যার ইনপুট খালি করা
        jQuery(".result").val('');   // ফলাফল ফিল্ড খালি করা
    }
    //adding

    jQuery('.add').click(function () {
        let anumber = jQuery(".anumber").val();
        let bnumber = jQuery(".bnumber").val();

        jQuery.ajax({
            url: 'proccess.php',
            type: 'GET',
            data: {
                'call': "add",
                'anumber': anumber,
                'bnumber': bnumber
            },
            success: function (response) {
                jQuery(".result").val(response);

            }
        })
    })

    //substitation
    jQuery('.sub').click(function () {
        let anumber = jQuery(".anumber").val();
        let bnumber = jQuery(".bnumber").val();

        jQuery.ajax({
            url: 'proccess.php',
            type: 'GET',
            data: {
                'call': "sub",
                'anumber': anumber,
                'bnumber': bnumber
            },
            success: function (response) {
                jQuery(".result").val(response);

            }
        })
    })

    //multipletion
    jQuery('.mul').click(function () {
        let anumber = jQuery(".anumber").val();
        let bnumber = jQuery(".bnumber").val();

        jQuery.ajax({
            url: 'proccess.php',
            type: 'GET',
            data: {
                'call': "mul",
                'anumber': anumber,
                'bnumber': bnumber
            },
            success: function (response) {
                jQuery(".result").val(response);

            }
        })
    })

    //devidation
    jQuery('.div').click(function () {
        let anumber = jQuery(".anumber").val();
        let bnumber = jQuery(".bnumber").val();

        jQuery.ajax({
            url: 'proccess.php',
            type: 'GET',
            data: {
                'call': "div",
                'anumber': anumber,
                'bnumber': bnumber
            },
            success: function (response) {
                jQuery(".result").val(response);

            }
        })
    })

    jQuery('.clear').click(function () {
        clearAllFields(); // সব ফিল্ড খালি করার জন্য ফাংশন কল করা
    });

});


//====================CALCULATOR END=====================