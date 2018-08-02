<form action="<?= \yii\helpers\Url::to(['admin/film/edit-save'])?>" enctype="multipart/form-data" method="post">
    <table>
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>" />
        <tr>
            <input type="text" placeholder="用户名" name="username" value="<?= $username ?>">
        </tr>
        <tr>
            <input type="text" placeholder="昵称" name="nickname" value="<?= $nickname ?>">
        </tr>
        <tr>
            <input type="text" placeholder="密码" name="password" value="<?= $password ?>">
        </tr>
        <tr>
            <input type="text" placeholder="年龄" name="age" value="<?= $age ?>">
        </tr>
        <tr>
            <input type="datetime" placeholder="生日" name="birth" value="<?= $birth ?>">
        </tr>
        <tr>
            <input type="text" placeholder="地区" name="area_id" value="<?= $area_id ?>">
        </tr>
        <tr>
            <input type="text" placeholder="会员名称" name="vip_id" value="<?= $vip_id ?>">
        </tr>
        <tr>
            <input type="text" placeholder="是否是管理员" name="is_admin" value="<?= $is_admin ?>">
        </tr>
        <tr>
            <input type="file" name="user_photo">
        </tr>
        <tr>
            <input type="submit" value="添加">
        </tr>
    </table>
</form>
