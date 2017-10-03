<?php

namespace Etki\Benchmark\Native\Math;

/**
 * Is it faster to manually multiply number by itself ot to call pow function?
 *
 * Manual unroll is faster, of course, and takes 3/5 of pow() time on my
 * machine.
 */
class PowerOfTwoBenchmark
{
    /**
     * @Subject
     * @Revs(1048576)
     * @Iterations(16)
     */
    public function powFunction()
    {
       return pow(2014, 2);
    }

    /**
     * @Subject
     * @Revs(1048576)
     * @Iterations(16)
     */
    public function manualMultiplication()
    {
        return 2014 * 2014;
    }
}
