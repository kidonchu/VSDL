CREATE TABLE tblLog (
    nID         BIGINT      NOT NULL auto_increment,
    timeTime    TIMESTAMP   NOT NULL,
    strLog      TEXT        NOT NULL,
    PRIMARY KEY (nID)
);