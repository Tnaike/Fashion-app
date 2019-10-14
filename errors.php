<?php if(count($errors) > 0): ?>
    <div class="col-md-12 col-sm-12 col-xs-12 notif error">
        <?php foreach ($errors as $error): ?>
            <p><i class="fa fa-warning fa-lg m-right-5"></i> <?php echo $error; ?></p>
        <?php endforeach ?>    
    </div> 
<?php endif ?>
<?php if(count($successes) > 0): ?>
    <div class="col-md-12 col-sm-12 col-xs-12 notif success">
        <?php foreach ($successes as $success): ?>
            <p><i class="fa fa-check-circle-o fa-lg m-right-5"></i> <?php echo $success; ?></p>
        <?php endforeach ?>    
    </div> 
<?php endif ?>