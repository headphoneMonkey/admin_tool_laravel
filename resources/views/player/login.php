<!DOCTYPE html>
<html>
    <head>
        <title>Login data</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .title {
                font-size: 40px;
            	 display: table-cell;
            }
        </style>
    </head>
    <body>
        <div class="title">Login Data</div>
        <hr>
	    
	    <?php 
	       echo Form::open(array('url' => 'admin/login_data'));
	       echo "Player id:".Form::text('player_id'); 
	       echo Form::submit(trans('messages.submit'));
	    ?>
	    
	    <table class = "table table-striped">
	    <?php echo $results; ?>
		</table>
		</div>
        </div>
    </body>
</html>
