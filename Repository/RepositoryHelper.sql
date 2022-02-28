SELECT
    '%table%' AS 'table',
    '%entity%' AS 'entity',
    '%column%' AS 'column',
    '%field%' AS 'field',
    %available% AS 'available',
    MIN(LENGTH(`%column%`)) AS 'minimum',
    MAX(LENGTH(`%column%`)) AS 'maximum',
    AVG(LENGTH(`%column%`)) AS 'average',
    COUNT(`%column%`) AS 'count'
FROM `%table%`
