<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->string('id', 36);
            $table->string('parentId', 36)->default('')->comment('parent document ID');

            $table->string('instanceId', 36)->default('')->comment('instance ID. This is associated with area classification as like Menu, Board.');
            $table->string('type', 36)->default('')->comment('Module Type. Module ID of registered this document.');

            // users
            $table->string('userType', '16')->default('normal')->comment('User Type. Type of document writer. user/guest/anonymity/normal');
            $table->string('userId', 36)->comment('User ID. User ID of document writer. If userType is guest or anonymity it can be empty string.');
            $table->string('writer', 200)->comment('document writer name. It is usually a User displayName. It can be differ if userType is guest or anonymity.');
            $table->string('email')->nullable()->comment('Email. It is usually Null. It registered if userType is guest.');
            $table->string('certifyKey', 200)->comment('Certify key. It is usually empty string. It registered if userType is guest.');

            // count
            $table->integer('readCount')->default(0)->comment('document read count');
            $table->integer('commentCount')->default(0)->comment('commented registered counter');
            $table->integer('assentCount')->default(0)->comment('assent count. The count for assent type.');
            $table->integer('dissentCount')->default(0)->comment('dissent count. The count for dissent type.');
            $table->string('locale', 4)->default('')->comment('locale information. Empty string if not set. ko:korean/en:english/...');

            $table->string('title', 180)->comment('document title');
            $table->text('content')->comment('document content');
            $table->text('pureContent')->comment('document pure content. There is content for human readable(HTML removed). It using for fulltext search.');

            $table->timestamp('createdAt')->comment('document created date');
            $table->timestamp('updatedAt')->nullable()->comment('document updated date');
            $table->timestamp('publishedAt')->nullable()->comment('document published date');
            $table->timestamp('deletedAt')->nullable()->comment('document deleted date. for soft delete.');

            $table->string('head', 50)->comment('document order. It using for document list sorting. Enables sorting of parent-child relationship documents.');
            $table->string('reply', 150)->comment('string for sorting parent-child documents');
            $table->string('ipaddress', 16)->comment('IP address of document writer');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
