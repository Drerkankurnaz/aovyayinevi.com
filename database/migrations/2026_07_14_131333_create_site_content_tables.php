<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('abouts')) {
            Schema::create('abouts', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('schools')) {
            Schema::create('schools', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('institutions')) {
            Schema::create('institutions', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('autisms')) {
            Schema::create('autisms', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contents')) {
            Schema::create('contents', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->integer('type')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('researches')) {
            Schema::create('researches', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('announcements')) {
            Schema::create('announcements', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->string('price')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('writers')) {
            Schema::create('writers', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('book')->nullable();
                $table->string('name')->nullable();
                $table->string('phone')->nullable();
                $table->string('tc')->nullable();
                $table->string('address')->nullable();
                $table->string('address_two')->nullable();
                $table->string('adet')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('content')->nullable();
                $table->string('type')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('writers');
        Schema::dropIfExists('books');
        Schema::dropIfExists('announcements');
        Schema::dropIfExists('researches');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('autisms');
        Schema::dropIfExists('institutions');
        Schema::dropIfExists('schools');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('services');
    }
};
