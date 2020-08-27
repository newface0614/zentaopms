<?php
/* Actions. */
$lang->program->index              = '仪表盘';
$lang->program->create             = '添加项目';
$lang->program->createGuide        = '选择项目模板';
$lang->program->edit               = '编辑项目';
$lang->program->browse             = '项目列表';
$lang->program->all                = '所有项目';
$lang->program->start              = '启动项目';
$lang->program->finish             = '完成项目';
$lang->program->suspend            = '挂起项目';
$lang->program->delete             = '删除项目';
$lang->program->close              = '关闭项目';
$lang->program->activate           = '激活项目';
$lang->program->group              = '权限分组';
$lang->program->createGroup        = '创建分组';
$lang->program->editGroup          = '编辑分组';
$lang->program->copyGroup          = '复制分组';
$lang->program->manageView         = '维护视图';
$lang->program->managePriv         = '维护权限';
$lang->program->manageMembers      = '项目团队';
$lang->program->export             = '导出';
$lang->program->manageGroupMember  = '维护分组用户';

/* Fields. */
$lang->program->common             = '项目';
$lang->program->stage              = '阶段';
$lang->program->name               = '项目名称';
$lang->program->template           = '项目模板';
$lang->program->category           = '项目类型';
$lang->program->desc               = '项目描述';
$lang->program->code               = '项目代号';
$lang->program->copy               = '复制项目';
$lang->program->begin              = '计划开始日期';
$lang->program->end                = '计划完成日期';
$lang->program->status             = '项目状态';
$lang->program->PM                 = '项目负责人';
$lang->program->budget             = '项目预算';
$lang->program->dateRange          = '起止时间';
$lang->program->to                 = '至';
$lang->program->realFinished       = '实际完成日期';
$lang->program->realStarted        = '实际开始日期';
$lang->program->bygrid             = '看板';
$lang->program->bylist             = '列表';
$lang->program->mine               = '我参与的';
$lang->program->setPlanduration    = '设置工期';
$lang->program->privway            = '权限控制';
$lang->program->durationEstimation = '工作量估算';
$lang->program->progress           = '项目进度';
$lang->program->teamCount          = '投入人数';
$lang->program->leftStories        = '剩余需求';
$lang->program->leftTasks          = '剩余任务';
$lang->program->leftBugs           = '剩余Bug';
$lang->program->children           = '子项目';
$lang->program->parent             = '父项目';
$lang->program->allStories         = '总需求';
$lang->program->doneStories        = '已完成';
$lang->program->leftStories        = '剩余需求';
$lang->program->allInput           = '项目总投入';
$lang->program->weekly             = '项目周报';
$lang->program->pv                 = 'PV';
$lang->program->ev                 = 'EV';
$lang->program->sv                 = 'SV%';
$lang->program->ac                 = 'AC';
$lang->program->cv                 = 'CV%';
$lang->program->pm                 = '项目负责人';
$lang->program->teamCount          = '项目成员';
$lang->program->longTime           = '长期项目';

$lang->program->unitList[''] = '';
$lang->program->unitList['yuan']   = '元';
$lang->program->unitList['dollar'] = 'Dollars';

$lang->program->templateList['scrum'] = "Scrum";
$lang->program->templateList['cmmi']  = "瀑布";

$lang->program->categoryList['single']   = "单产品项目";
$lang->program->categoryList['multiple'] = "多产品项目";

$lang->program->featureBar['all']       = '所有';
$lang->program->featureBar['doing']     = '进行中';
$lang->program->featureBar['wait']      = '未开始';
$lang->program->featureBar['suspended'] = '已挂起';
$lang->program->featureBar['closed']    = '已关闭';

$lang->program->aclList['open']    = "默认设置(有项目视图权限，即可访问)";
$lang->program->aclList['private'] = "私有项目(只有项目团队成员才能访问)";
$lang->program->aclList['custom']  = "自定义白名单(团队成员和白名单的成员可以访问)";

$lang->program->privwayList['extend'] = '继承(取项目权限与组织权限的并集)';
$lang->program->privwayList['reset']  = '重新定义(只取项目权限)';

$lang->program->statusList['wait']      = '未开始';
$lang->program->statusList['doing']     = '进行中';
$lang->program->statusList['suspended'] = '已挂起';
$lang->program->statusList['closed']    = '已关闭';

$lang->program->noProgram          = '暂时没有项目';
$lang->program->accessDenied       = '您无权访问该项目！';
$lang->program->chooseProgramType  = '选择项目管理方式';
$lang->program->nextStep           = '下一步';
$lang->program->hoursUnit          = '%s工时';
$lang->program->membersUnit        = '%s人';
$lang->program->lastIteration      = '近期迭代';
$lang->program->ongoingStage       = '进行中的阶段';
$lang->program->scrum              = 'Scrum';
$lang->program->scrumTitle         = '敏捷开发全流程项目管理';
$lang->program->cmmi               = '瀑布';
$lang->program->cmmiTitle          = '瀑布式项目管理';
$lang->program->cannotCreateChild  = '该项目已经有实际的内容，无法直接添加子项目。您可以为当前项目创建一个父项目，然后在新的父项目下面添加子项目。';
$lang->program->hasChildren        = '该项目有子项目存在，不能删除。';
$lang->program->confirmDelete      = "您确定删除项目[%s]吗？";
$lang->program->emptyPM            = '暂无';
$lang->program->cannotChangeToCat  = "该项目已经有实际的内容，无法修改为父项目";
$lang->program->cannotCancelCat    = "该项目下已经有子项目，无法取消父项目标记";
$lang->program->parentBeginEnd     = "父项目起止时间：%s ~ %s";
$lang->program->parentBudget       = "父项目预算：%s";
$lang->program->beginLetterParent  = "父项目的开始日期：%s，开始日期不能小于父项目的开始日期";
$lang->program->endGreaterParent   = "父项目的完成日期：%s，完成日期不能大于父项目的完成日期";
$lang->program->beginGreateChild   = "子项目的最小开始日期：%s，父项目的开始日期不能大于子项目的最小开始日期";
$lang->program->endLetterChild     = "子项目的最大完成日期：%s，父项目的完成日期不能小于子项目的最大完成日期";
$lang->program->childLongTime      = "子项目中有长期项目，父项目也应该是长期项目";
