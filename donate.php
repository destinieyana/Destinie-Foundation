<html>
    <head>
        <title>Donate</title>
        <link rel="stylesheet" type="text/css" href="donate.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <div class="sec1 sec">
        <h1>YOU can deliver health and hope to orphans around the world</h1>
        <p><img src="Images/donate.jpeg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque.</p>	
    </div>
    <div class="sec2 sec">
        <form method="POST" action="billing.php">
        <h2>Gift Amount<span class="req">*</span></h2>
        <input type="hidden" name="amount" value="100" />
        <div class="gift-amt">
            <button type="button" value="10" class="amount"><span>$10</span></button>
            <button type="button" value="25" class="amount"><span>$25</span></button>
            <button type="button" value="50" class="amount"><span>$50</span></button>
            <button type="button" value="75" class="amount"><span>$75</span></button>
            <button type="button" value="100" class="amount active"><span>$100</span></button>
            <button type="button" value="" class="amount" id="other"><span>OTHER</span></button>
            <div class="other-field hide">
                <label>Other Amount<span class="req">*</span>$</label>
                <input name="other-amt" type="text" value="">
            </div>
        </div>
        <div class="gift-freq">
            <div class="cols">
                <div class="freq">
                    <h2>Gift Frequency<span class="req">*</span></h2>
                    <div class="freq1"><input type="radio" checked="checked" class="radio-button" value="One">One-time gift<br></div>
                    <div class="freq2"><input type="radio" class="radio-button" value="Recurring">Recurring monthly gift<br></div>
                </div>
                <div class="sponsor">
                    <h2>Gift Designation</h2>
                    <select>
                        <option value="anywhere">Where the need is greatest</option>
                        <option value="sponsor">Sponsor a child</option>
                        <option value="housing">Housing needs</option>
                        <option value="supplies">Supplies</option>
                        <option value="food">Food</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="tribute">
            <h2>Would you like to make this a tribute gift?</h2>
            <div class="tribute2">
                <input type="checkbox" class="checkbox" value="One-time gift">Yes, make this gift  
            </div>
            <div class="select">
                <select name="type">
                    <option value="honor">in honor of</option>
                    <option value="memory">in memory of</option>
                </select>
                <input type="text" class="honoree" placeholder="Name of Honoree">
                <button type="submit" class="continue">Continue</button>
            </div> 
        </div>
        </form>
    </div>

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {

    $('.amount').on('click', function(event) {
        var theAmount = $(this).attr('value');
        $('[name=amount]').val(theAmount);
        $('[name=other-amt]').val("0");
        $('.amount').removeClass('active');
        $(this).toggleClass('active');
        $(".hide").hide();
    });

    $("#other").click(function(){
        $(".hide").show();
    });

    $('.radio-button').on("click", function (event) {
        var this_input = $(this);
        if (this_input.attr('checked1') == '11') {
            this_input.attr('checked1', '11')
        }
        else {
            this_input.attr('checked1', '22')
        }
        $('.radio-button').prop('checked', false);
        if (this_input.attr('checked1') == '11') {
            this_input.prop('checked', false);
            this_input.attr('checked1', '22')
        }
        else {
            this_input.prop('checked', true);
            this_input.attr('checked1', '11')
        } 
    });
});
</script>
</body>
</html>
