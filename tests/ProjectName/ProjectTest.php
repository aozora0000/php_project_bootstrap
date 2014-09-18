<?php
    use Aozora0000\ProjectName;

    class ProjectTest extends PHPUnit_Framework_TestCase {

        protected function setUp() {
            
        }

        /*
         *
         * 
         */
        public function testDo() {
            try {
                $this->assertTrue(true);
            } catch(Exception $e) {
                $this->fail('期待通りの例外が発生しませんでした。');
            }
        }
    }
