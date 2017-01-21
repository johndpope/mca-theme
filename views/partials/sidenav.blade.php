<?php
$active = !isset($active) ? 1 : $active;
$stage1 = $active == 1 ? 'active' : '';
$stage2 = $active == 2 ? 'active' : '';
$stage3 = $active == 3 ? 'active' : '';
$stage4 = $active == 4 ? 'active' : '';
$stage5 = $active == 5 ? 'active' : '';
$stage6 = $active == 6 ? 'active' : '';
$stage7 = $active == 7 ? 'active' : '';
?>

<div class="col-md-3 sidebar-progress">
    <div class="progress-message-container">
        <p>
        Hi <b>{{$session['name']}}</b> <a href="/form/logout">Logout</a>
        </p>
        <div class="progress-message">
            Complete the <strong><span>7 steps</span></strong> to see what loans you are <strong>Pre-Qualified
                for</strong>.
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar">
            </div>
        </div>
        <strong><span class="progress-word">&nbsp;</span></strong>
    </div>

    <div class="form-categories">
        <div class="category <?php echo $stage1 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/personal">Personal Information</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage2 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/business-information">Business Information</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage3 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/business-reference">Business References</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage4 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/loan-details">Loan Details</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage5 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/business-owner">Business Owner</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage6 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/authorization">Authorization</a>
                </p>
            </div>
            <span></span>
        </div>
        <div class="category <?php echo $stage7 ?>">
            <div class="category-list-item">
                <p>
                    <span class="glyphicon glyphicon-ok"></span>
                    <a href="/form/documents">Documents</a>
                </p>
            </div>
            <span></span>
        </div>

    </div>
</div>
