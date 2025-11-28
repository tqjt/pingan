<?php
declare(strict_types=1);

namespace Tqjt\Pingan\Curves;

use Tqjt\Pingan\Math\GmpMathInterface;
use Tqjt\Pingan\Primitives\CurveFp;
use Tqjt\Pingan\Primitives\CurveParameters;

class NamedCurveFp extends CurveFp
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string           $name
     * @param CurveParameters  $parameters
     * @param GmpMathInterface $adapter
     */
    public function __construct(string $name, CurveParameters $parameters, GmpMathInterface $adapter)
    {
        $this->name = $name;

        parent::__construct($parameters, $adapter);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
