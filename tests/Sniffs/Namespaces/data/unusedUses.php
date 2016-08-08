<?php

namespace Foo;

use First\Object;
use Framework;
use Framework\Subnamespace;
use My\Object as MyObject;
use NewNamespace\Object as NewObject;
use R\S;
use T;
use function FooBar\UnusedFunction;
use function LoremIpsum\UsedFunction;
use const FooBar\UNUSED_CONSTANT;
use const LoremIpsum\USED_CONSTANT;

class TestClass
{

	public function test(S $s)
	{
		new \Test\Foo\Bar();
		$date = T::today();
		new Framework\FooObject();
		new Subnamespace\BarObject();

		$functionNameAsClass = new UnusedFunction();
		$unusedConstant = new UNUSED_CONSTANT();
		UsedFunction();
		doFoo(USED_CONSTANT);

		return new NewObject();
	}

}
