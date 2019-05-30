<?php
require_once 'Person.php';

class BusinessPerson extends Person {
    // サブクラス独自のworkメソッドを定義
    public function work(){
        print "<p><{$this->lastName}{$this->firstName}は働いてます。/p>";
    }
}