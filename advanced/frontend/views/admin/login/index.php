<div class="panel-body">
    <form class="am-form" method="post" action="<?= \yii\helpers\Url::to(['admin/login/login'])?>">
        <div class="am-g">
            <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>" />
            <div class="am-form-group">
                <input type="text" class="am-radius" name="username"  placeholder="Username">
            </div>

            <div class="am-form-group form-horizontal m-t-20">
                <input type="password" class="am-radius" name="password"  placeholder="Password">
            </div>

            <div class="am-form-group ">
                <label style="font-weight: normal;color: #999;">
                    <input type="checkbox" class="remeber"> Remember me
                </label>
            </div>

            <div class="am-form-group ">
                <button type="button" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;" value="Log In"><input
                            type="submit" class="am-btn am-btn-primary am-radius">
            </div>

            <div class="am-form-group ">
                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
            </div>
        </div>

    </form>

</div>