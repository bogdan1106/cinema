
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Fengyuan Chen Datepicker Plugin Demos</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="prettify.css">
    <link rel="stylesheet" href="dist/datepicker.min.css">
    <link rel="stylesheet" href="docs.css">
</head>
<body>
<!-- content -->
<div class="container">
    <h1 class="page-header">jQuery Fengyuan Chen Datepicker Plugin Demos</h1>
    <div class="jquery-script-ads"><script type="text/javascript"><!--
            google_ad_client = "ca-pub-2783044520727903";
            /* jQuery_demo */
            google_ad_slot = "2780937993";
            google_ad_width = 728;
            google_ad_height = 90;
            //-->
        </script>
        <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script></div>
    <h3>Add a trigger</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input type=&quot;text&quot; datepicker data-trigger=&quot;#show-datepicker&quot;&gt;
&lt;span id=&quot;show-datepicker&quot;&gt;&lt;/span&gt;</pre>
    <p>Demo:</p>
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" type="text" datepicker data-trigger="#show-datepicker">
            <span id="show-datepicker" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
    </div>

    <h3>Without years</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input type=&quot;text&quot; datepicker data-date-format=&quot;m.d&quot;&gt;</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input class="form-control" type="text" datepicker data-date-format="m.d">
    </div>

    <h3>Without days</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input type=&quot;text&quot; datepicker data-date-format=&quot;yyyy.mm&quot;&gt;</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input class="form-control" type="text" datepicker data-date-format="yyyy.mm">
    </div>

    <h3>Only years</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input type=&quot;text&quot; datepicker data-date-format=&quot;yyyy&quot;&gt;</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input class="form-control" type="text" datepicker data-date-format="yyyy">
    </div>

    <h3>Start view with years</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input id="datepicker-view-start" type=&quot;text&quot;&gt;</pre>
    <p>JavaScript:</p>
    <pre class="prettyprint">$(&quot;#datepicker-view-start&quot;).datepicker({
    autoClose: true,
    viewStart: 2
});</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input id="datepicker-view-start" class="form-control" type="text">
    </div>

    <h3>Start week with Monday</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input type=&quot;text&quot; datepicker data-week-start=&quot;1&quot;&gt;</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input class="form-control" type="text" datepicker data-week-start="1">
    </div>
    <h3>Disable the past days</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input id="datepicker-disable-past" type=&quot;text&quot;&gt;</pre>
    <p>JavaScript:</p>
    <pre class="prettyprint">var now = Date.now();

$(&quot;#datepicker-disable-past&quot;).datepicker({
    isDisabled: function(date) {
        return date.valueOf() &lt; now ? true : false;
    }
});</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input id="datepicker-disable-past" class="form-control" type="text">
    </div>

    <h3>Disable all of the Wednesday</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input id="datepicker-disable-wednesday" type=&quot;text&quot;&gt;</pre>
    <p>JavaScript:</p>
    <pre class="prettyprint">$(&quot;#datepicker-disable-wednesday&quot;).datepicker({
    isDisabled: function(date) {
        return date.getDay() === 3 ? true : false;
    }
});</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input id="datepicker-disable-wednesday" class="form-control" type="text">
    </div>

    <h3>Set a date range</h3>
    <p>HTML:</p>
    <pre class="prettyprint">&lt;input id="datepicker-date-range" type=&quot;text&quot; value=&quot;02/15/2020&quot;&gt;</pre>
    <p>JavaScript:</p>
    <pre class="prettyprint">var minDate = (new Date(2020, 1, 15)).getTime(),
    maxDate = (new Date(2020, 2, 25)).getTime();

$(&quot;#datepicker-date-range&quot;).datepicker({
    isDisabled: function(date) {
        date = date.getTime();

        return (date &lt; minDate || date &gt; maxDate) ? true : false;
    }
});</pre>
    <p>Demo:</p>
    <div class="form-group">
        <input id="datepicker-date-range" class="form-control" type="text" value="02/15/2020">
    </div>
    <h3>Methods:</h3>
    <ul>
        <li><strong>show</strong> - <em>Show the datepicker</em></li>
        <li><strong>hide</strong> - <em>Hide the datepicker</em></li>
        <li><strong>enable</strong> - <em>Enable the datepicker</em></li>
        <li><strong>disable</strong> - <em>Disable the datepicker</em></li>
        <li><strong>update</strong> - <em>Update the datepicker</em></li>
    </ul>
    <p>Demo:</p>
    <div class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Email address</label>
            <input id="datepicker-methods" class="form-control" type="text">
        </div>
        <button id="datepicker-show" class="btn btn-primary">Show</button>
        <button id="datepicker-hide" class="btn btn-info">Hide</button>
        <button id="datepicker-enable" class="btn btn-success">Enable</button>
        <button id="datepicker-disable" class="btn btn-danger">Disable</button>
        <button id="datepicker-update" class="btn btn-primary">Update</button>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="prettify.js"></script>
<script src="main.js"></script>
<script src="dist/datepicker.min.js"></script>
<script>
    $(function() {

        $("#datepicker-add-options").datepicker({
            dateFormat: "yyyy.m.d",
            weekStart: 1
        });

        // Methods
        var $datepicker = $("#datepicker-methods"),
            $show = $("#datepicker-show"),
            $hide = $("#datepicker-hide"),
            $enable = $("#datepicker-enable"),
            $disable = $("#datepicker-disable"),
            $update = $("#datepicker-update"),
            datepicker;

        // Initialize
        $datepicker.datepicker();

        // Get the instance
        datepicker = $datepicker.data("datepicker");

        // Show
        $show.click(function() {
            $datepicker.datepicker("show");
        });

        // Hide
        $hide.click(function() {
            datepicker.hide();
        });

        // Enable
        $enable.click(function() {
            $datepicker.datepicker("enable");
        });

        // Disable
        $disable.click(function() {
            datepicker.disable();
        });

        // Update
        $update.click(function() {
            $datepicker.val("02/25/2020").datepicker("update").datepicker("show");
        });

        $(".datepicker").datepicker();

        $("#datepicker-view-start").datepicker({
            autoClose: true,
            viewStart: 2
        });

        var now = Date.now();

        $("#datepicker-disable-past").datepicker({
            isDisabled: function(date) {
                return date.valueOf() < now ? true : false;
            }
        });

        $("#datepicker-disable-wednesday").datepicker({
            isDisabled: function(date) {
                return date.getDay() === 3 ? true : false;
            }
        });

        var minDate = (new Date(2020, 1, 15)).getTime(),
            maxDate = (new Date(2020, 2, 25)).getTime();

        // Set date range
        $("#datepicker-date-range").datepicker({
            isDisabled: function(date) {
                date = date.getTime();

                return (date < minDate || date > maxDate) ? true : false;
            }
        });
    });
</script><script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
