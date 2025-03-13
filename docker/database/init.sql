DO $$
BEGIN

    IF NOT EXISTS(
        SELECT schema_name
          FROM information_schema.schemata
          WHERE schema_name = 'nova'
      )
    THEN
      EXECUTE 'CREATE SCHEMA nova';
    END IF;

END
$$;