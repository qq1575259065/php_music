



<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="card-box">
            <!-- Row start -->
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
				            <button class="am-btn am-btn-default" type="button">搜索</button>
				          </span>
                    </div>
                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-check"><input type="checkbox" /></th>
                                <th>id</th>
                                <th>用户名</th>
                                <th>昵称</th>
                                <th>密码</th>
                                <th>年龄</th>
                                <th>生日</th>
                                <th>地区</th>
                                <th>会员名称</th>
                                <th>是否是管理员</th>
                                <th>消息</th>
                                <th>用户头像</th>
                                <th class="table-date am-hide-sm-only">创建日期</th>
                                <th class="table-date am-hide-sm-only">修改日期</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $v):?>
                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td><?= $v['id'] ?></td>
                                    <td><?= $v['username'] ?></td>
                                    <td><?= $v['nickname'] ?></td>
                                    <td><?= $v['password'] ?></td>
                                    <td><?= $v['age'] ?></td>
                                    <td><?= $v['birth'] ?></td>
                                    <td><?= $v['area_id'] ?></td>
                                    <td><?= $v['vip_id'] ?></td>
                                    <td><?= $v['is_admin'] ?></td>
                                    <td><?= $v['message_id'] ?></td>
                                    <td><?= $v['user_photo'] ?></td>
                                    <td class="am-hide-sm-only"><?= $v['create_time'] ?></td>
                                    <td class="am-hide-sm-only"><?= $v['update_time'] ?></td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="<?= \yii\helpers\Url::to(['admin/user/edit','id'=>$v['id']])?>">编辑</a></button>
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="<?= \yii\helpers\Url::to(['admin/user/delete','id'=>$v['id']])?>">删除</a></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共 15 条记录
                            <div class="am-fr">
                                <ul class="am-pagination">
                                    <li class="am-disabled"><a href="#">«</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Row end -->
        </div>
    </div>
</div>