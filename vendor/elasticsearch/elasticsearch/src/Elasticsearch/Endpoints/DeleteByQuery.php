<?php
declare(strict_types = 1);

namespace Elasticsearch\Endpoints;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteByQuery
 * Elasticsearch API name delete_by_query
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteByQuery extends AbstractEndpoint
{

    public function getURI(): string
    {
        if (isset($this->index) !== true) {
            throw new RuntimeException(
                'index is required for delete_by_query'
            );
        }
        $index = $this->index;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/_delete_by_query";
        }
        return "/$index/_delete_by_query";
    }

    public function getParamWhitelist(): array
    {
        return [
            'analyze_wildcard',
            'default_operator',
            'df',
            'from',
            'ignore_unavailable',
            'allow_no_indices',
            'conflicts',
            'expand_wildcards',
            'lenient',
            'preference',
            'q',
            'routing',
            'scroll',
            'search_type',
            'search_timeout',
            'size',
            'max_docs',
            'sort',
            '_source',
            '_source_excludes',
            '_source_includes',
            'terminate_after',
            'stats',
            'version',
            'request_cache',
            'refresh',
            'timeout',
            'wait_for_active_shards',
            'scroll_size',
            'wait_for_completion',
            'requests_per_second',
            'slices'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): DeleteByQuery
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
