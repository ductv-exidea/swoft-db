<?php declare(strict_types=1);

namespace Swoft\Db\Query\Processor;

use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * Class PostgresProcessor
 *
 * @since 2.0
 *
 * @Bean()
 */
class PostgresProcessor extends Processor
{
    /**
     * Process the results of a column listing query.
     *
     * @param  array  $results
     * @return array
     */
    public function processColumnListing($results)
    {
        return array_map(function ($result) {
            return ((object) $result)->column_name;
        }, $results);
    }
}
