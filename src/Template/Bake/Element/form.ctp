<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    });
%>
<?php $this->layout = 'CakeBootstrap.default'; ?>
<?php $this->start('subtitle_for_page'); ?>
Cms
<?php $this->end(); ?>

<!-- Header -->
<div class="cinema border-bottom-gray bg-amethyst-sl">
    <div class="container">
        <h3><?= __('<%= $pluralHumanName %>') ?>
            <div class="pull-right">

                <div class="btn-group">
                    <?= $this->Html->link(__('New <%= $singularHumanName %>'), ['action' => 'add'], ['class' => 'btn btn-sm btn-default']) ?>
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><?= $this->Html->link(__('List <%= $pluralHumanName %>'), ['action' => 'index']) ?> </li>
                        <%
                        $done = [];
                        foreach ($associations as $type => $data) {
                        foreach ($data as $alias => $details) {
                        if ($details['controller'] !== $this->name && !in_array($details['controller'], $done)) {
                        %>
                        <li><?= $this->Html->link(__('List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('New <%= Inflector::humanize(Inflector::singularize(Inflector::underscore($alias))) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add']) ?> </li>
                        <%
                            $done[] = $details['controller'];
                        }
                        }
                        }
                        %>
                    </ul>
                </div>
            </div>
        </h3>

    </div>
</div>

<!-- Begin page content -->
    <main id="main-container">

         <!-- Content -->
         <div class="container">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="panel-title">Form</h4>
                 </div>
                 <div class="panel-body">
                     <?= $this->Form->create($<%= $singularVar %>, ['align' => [
                     'sm' => [
                     'left' => 6,
                     'middle' => 6,
                     'right' => 12
                     ],
                     'md' => [
                     'left' => 3,
                     'middle' => 9
                     ]
                     ]]) ?>

                     <div class="form-body">
                         <?php
                         <%
                         foreach ($fields as $field) {
                         if (in_array($field, $primaryKey)) {
                         continue;
                         }
                         if (isset($keyFields[$field])) {
                         $fieldData = $schema->column($field);
                         if (!empty($fieldData['null'])) {
                         %>
                         echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, 'empty' => true]);
                         <%
                         } else {
                         %>
                         echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>]);
                         <%
                         }
                         continue;
                         }
                         if (!in_array($field, ['created', 'modified', 'updated'])) {
                         $fieldData = $schema->column($field);
                         if (in_array($fieldData['type'], ['date', 'datetime', 'time']) && (!empty($fieldData['null']))) {
                         %>
                         echo $this->Form->input('<%= $field %>', ['empty' => true]);
                         <%
                         } else {
                         %>
                         echo $this->Form->input('<%= $field %>');
                         <%
                         }
                         }
                         }
                         if (!empty($associations['BelongsToMany'])) {
                         foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
                         %>
                         echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]);
                         <%
                         }
                         }
                         %>
                         ?>
                     </div>
                     <div class="form-action">
                         <div class="row">
                             <div class="col-md-offset-3 col-md-4">
                                 <?= $this->Form->button(__('Submit'), ['class' => 'btn green']) ?>
                             </div>
                         </div>
                     </div>
                     <?= $this->Form->end() ?>
                 </div>
             </div>
         </div>
         <!-- Content -->

	</main>
<!-- End page Content -->
