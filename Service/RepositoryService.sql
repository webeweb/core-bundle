SELECT :table AS 'table',
       :column AS 'column',
       :entity AS 'entity',
       :field AS 'field',
       :type AS 'type',
       :available AS 'available',
       AVG(LENGTH(`{{ column }}`)) AS 'average',
       MIN(LENGTH(`{{ column }}`)) AS 'minimum',
       MAX(LENGTH(`{{ column }}`)) AS 'maximum'
FROM `{{ table }}`
