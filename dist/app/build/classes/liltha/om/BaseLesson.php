<?php


/**
 * Base class that represents a row from the 'lesson' table.
 *
 *
 *
 * @package    propel.generator.liltha.om
 */
abstract class BaseLesson extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LessonPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LessonPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the fk_course field.
     * @var        int
     */
    protected $fk_course;

    /**
     * The value for the fk_day field.
     * @var        int
     */
    protected $fk_day;

    /**
     * The value for the time_start field.
     * @var        string
     */
    protected $time_start;

    /**
     * The value for the time_end field.
     * @var        string
     */
    protected $time_end;

    /**
     * The value for the period_start field.
     * @var        string
     */
    protected $period_start;

    /**
     * The value for the period_end field.
     * @var        string
     */
    protected $period_end;

    /**
     * The value for the fk_place field.
     * @var        int
     */
    protected $fk_place;

    /**
     * The value for the price field.
     * @var        int
     */
    protected $price;

    /**
     * The value for the registration_url field.
     * @var        string
     */
    protected $registration_url;

    /**
     * @var        Course
     */
    protected $aCourse;

    /**
     * @var        Day
     */
    protected $aDay;

    /**
     * @var        Place
     */
    protected $aPlace;

    /**
     * @var        PropelObjectCollection|LessonToTeacher[] Collection to store aggregation of LessonToTeacher objects.
     */
    protected $collLessonToTeachers;
    protected $collLessonToTeachersPartial;

    /**
     * @var        PropelObjectCollection|Teacher[] Collection to store aggregation of Teacher objects.
     */
    protected $collTeachers;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $teachersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lessonToTeachersScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * Get the [fk_course] column value.
     *
     * @return int
     */
    public function getCourseID()
    {
        return $this->fk_course;
    }

    /**
     * Get the [fk_day] column value.
     *
     * @return int
     */
    public function getDayID()
    {
        return $this->fk_day;
    }

    /**
     * Get the [time_start] column value.
     *
     * @return string
     */
    public function getTimeStart()
    {
        return $this->time_start;
    }

    /**
     * Get the [time_end] column value.
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->time_end;
    }

    /**
     * Get the [period_start] column value.
     *
     * @return string
     */
    public function getPeriodStart()
    {
        return $this->period_start;
    }

    /**
     * Get the [period_end] column value.
     *
     * @return string
     */
    public function getPeriodEnd()
    {
        return $this->period_end;
    }

    /**
     * Get the [fk_place] column value.
     *
     * @return int
     */
    public function getPlaceID()
    {
        return $this->fk_place;
    }

    /**
     * Get the [price] column value.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [registration_url] column value.
     *
     * @return string
     */
    public function getRegistrationURL()
    {
        return $this->registration_url;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setID($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = LessonPeer::ID;
        }


        return $this;
    } // setID()

    /**
     * Set the value of [fk_course] column.
     *
     * @param int $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setCourseID($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_course !== $v) {
            $this->fk_course = $v;
            $this->modifiedColumns[] = LessonPeer::FK_COURSE;
        }

        if ($this->aCourse !== null && $this->aCourse->getID() !== $v) {
            $this->aCourse = null;
        }


        return $this;
    } // setCourseID()

    /**
     * Set the value of [fk_day] column.
     *
     * @param int $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setDayID($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_day !== $v) {
            $this->fk_day = $v;
            $this->modifiedColumns[] = LessonPeer::FK_DAY;
        }

        if ($this->aDay !== null && $this->aDay->getID() !== $v) {
            $this->aDay = null;
        }


        return $this;
    } // setDayID()

    /**
     * Set the value of [time_start] column.
     *
     * @param string $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setTimeStart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->time_start !== $v) {
            $this->time_start = $v;
            $this->modifiedColumns[] = LessonPeer::TIME_START;
        }


        return $this;
    } // setTimeStart()

    /**
     * Set the value of [time_end] column.
     *
     * @param string $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setTimeEnd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->time_end !== $v) {
            $this->time_end = $v;
            $this->modifiedColumns[] = LessonPeer::TIME_END;
        }


        return $this;
    } // setTimeEnd()

    /**
     * Set the value of [period_start] column.
     *
     * @param string $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setPeriodStart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period_start !== $v) {
            $this->period_start = $v;
            $this->modifiedColumns[] = LessonPeer::PERIOD_START;
        }


        return $this;
    } // setPeriodStart()

    /**
     * Set the value of [period_end] column.
     *
     * @param string $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setPeriodEnd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period_end !== $v) {
            $this->period_end = $v;
            $this->modifiedColumns[] = LessonPeer::PERIOD_END;
        }


        return $this;
    } // setPeriodEnd()

    /**
     * Set the value of [fk_place] column.
     *
     * @param int $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setPlaceID($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_place !== $v) {
            $this->fk_place = $v;
            $this->modifiedColumns[] = LessonPeer::FK_PLACE;
        }

        if ($this->aPlace !== null && $this->aPlace->getID() !== $v) {
            $this->aPlace = null;
        }


        return $this;
    } // setPlaceID()

    /**
     * Set the value of [price] column.
     *
     * @param int $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[] = LessonPeer::PRICE;
        }


        return $this;
    } // setPrice()

    /**
     * Set the value of [registration_url] column.
     *
     * @param string $v new value
     * @return Lesson The current object (for fluent API support)
     */
    public function setRegistrationURL($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->registration_url !== $v) {
            $this->registration_url = $v;
            $this->modifiedColumns[] = LessonPeer::REGISTRATION_URL;
        }


        return $this;
    } // setRegistrationURL()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_course = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_day = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->time_start = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->time_end = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->period_start = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->period_end = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->fk_place = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->price = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->registration_url = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 10; // 10 = LessonPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Lesson object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aCourse !== null && $this->fk_course !== $this->aCourse->getID()) {
            $this->aCourse = null;
        }
        if ($this->aDay !== null && $this->fk_day !== $this->aDay->getID()) {
            $this->aDay = null;
        }
        if ($this->aPlace !== null && $this->fk_place !== $this->aPlace->getID()) {
            $this->aPlace = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(LessonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LessonPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCourse = null;
            $this->aDay = null;
            $this->aPlace = null;
            $this->collLessonToTeachers = null;

            $this->collTeachers = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(LessonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LessonQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(LessonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                LessonPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCourse !== null) {
                if ($this->aCourse->isModified() || $this->aCourse->isNew()) {
                    $affectedRows += $this->aCourse->save($con);
                }
                $this->setCourse($this->aCourse);
            }

            if ($this->aDay !== null) {
                if ($this->aDay->isModified() || $this->aDay->isNew()) {
                    $affectedRows += $this->aDay->save($con);
                }
                $this->setDay($this->aDay);
            }

            if ($this->aPlace !== null) {
                if ($this->aPlace->isModified() || $this->aPlace->isNew()) {
                    $affectedRows += $this->aPlace->save($con);
                }
                $this->setPlace($this->aPlace);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->teachersScheduledForDeletion !== null) {
                if (!$this->teachersScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->teachersScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($pk, $remotePk);
                    }
                    LessonToTeacherQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->teachersScheduledForDeletion = null;
                }

                foreach ($this->getTeachers() as $teacher) {
                    if ($teacher->isModified()) {
                        $teacher->save($con);
                    }
                }
            } elseif ($this->collTeachers) {
                foreach ($this->collTeachers as $teacher) {
                    if ($teacher->isModified()) {
                        $teacher->save($con);
                    }
                }
            }

            if ($this->lessonToTeachersScheduledForDeletion !== null) {
                if (!$this->lessonToTeachersScheduledForDeletion->isEmpty()) {
                    LessonToTeacherQuery::create()
                        ->filterByPrimaryKeys($this->lessonToTeachersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lessonToTeachersScheduledForDeletion = null;
                }
            }

            if ($this->collLessonToTeachers !== null) {
                foreach ($this->collLessonToTeachers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = LessonPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LessonPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LessonPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(LessonPeer::FK_COURSE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_course`';
        }
        if ($this->isColumnModified(LessonPeer::FK_DAY)) {
            $modifiedColumns[':p' . $index++]  = '`fk_day`';
        }
        if ($this->isColumnModified(LessonPeer::TIME_START)) {
            $modifiedColumns[':p' . $index++]  = '`time_start`';
        }
        if ($this->isColumnModified(LessonPeer::TIME_END)) {
            $modifiedColumns[':p' . $index++]  = '`time_end`';
        }
        if ($this->isColumnModified(LessonPeer::PERIOD_START)) {
            $modifiedColumns[':p' . $index++]  = '`period_start`';
        }
        if ($this->isColumnModified(LessonPeer::PERIOD_END)) {
            $modifiedColumns[':p' . $index++]  = '`period_end`';
        }
        if ($this->isColumnModified(LessonPeer::FK_PLACE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_place`';
        }
        if ($this->isColumnModified(LessonPeer::PRICE)) {
            $modifiedColumns[':p' . $index++]  = '`price`';
        }
        if ($this->isColumnModified(LessonPeer::REGISTRATION_URL)) {
            $modifiedColumns[':p' . $index++]  = '`registration_url`';
        }

        $sql = sprintf(
            'INSERT INTO `lesson` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`fk_course`':
                        $stmt->bindValue($identifier, $this->fk_course, PDO::PARAM_INT);
                        break;
                    case '`fk_day`':
                        $stmt->bindValue($identifier, $this->fk_day, PDO::PARAM_INT);
                        break;
                    case '`time_start`':
                        $stmt->bindValue($identifier, $this->time_start, PDO::PARAM_STR);
                        break;
                    case '`time_end`':
                        $stmt->bindValue($identifier, $this->time_end, PDO::PARAM_STR);
                        break;
                    case '`period_start`':
                        $stmt->bindValue($identifier, $this->period_start, PDO::PARAM_STR);
                        break;
                    case '`period_end`':
                        $stmt->bindValue($identifier, $this->period_end, PDO::PARAM_STR);
                        break;
                    case '`fk_place`':
                        $stmt->bindValue($identifier, $this->fk_place, PDO::PARAM_INT);
                        break;
                    case '`price`':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_INT);
                        break;
                    case '`registration_url`':
                        $stmt->bindValue($identifier, $this->registration_url, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setID($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCourse !== null) {
                if (!$this->aCourse->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCourse->getValidationFailures());
                }
            }

            if ($this->aDay !== null) {
                if (!$this->aDay->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDay->getValidationFailures());
                }
            }

            if ($this->aPlace !== null) {
                if (!$this->aPlace->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlace->getValidationFailures());
                }
            }


            if (($retval = LessonPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLessonToTeachers !== null) {
                    foreach ($this->collLessonToTeachers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = LessonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getID();
                break;
            case 1:
                return $this->getCourseID();
                break;
            case 2:
                return $this->getDayID();
                break;
            case 3:
                return $this->getTimeStart();
                break;
            case 4:
                return $this->getTimeEnd();
                break;
            case 5:
                return $this->getPeriodStart();
                break;
            case 6:
                return $this->getPeriodEnd();
                break;
            case 7:
                return $this->getPlaceID();
                break;
            case 8:
                return $this->getPrice();
                break;
            case 9:
                return $this->getRegistrationURL();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Lesson'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Lesson'][$this->getPrimaryKey()] = true;
        $keys = LessonPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getID(),
            $keys[1] => $this->getCourseID(),
            $keys[2] => $this->getDayID(),
            $keys[3] => $this->getTimeStart(),
            $keys[4] => $this->getTimeEnd(),
            $keys[5] => $this->getPeriodStart(),
            $keys[6] => $this->getPeriodEnd(),
            $keys[7] => $this->getPlaceID(),
            $keys[8] => $this->getPrice(),
            $keys[9] => $this->getRegistrationURL(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCourse) {
                $result['Course'] = $this->aCourse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDay) {
                $result['Day'] = $this->aDay->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPlace) {
                $result['Place'] = $this->aPlace->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collLessonToTeachers) {
                $result['LessonToTeachers'] = $this->collLessonToTeachers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = LessonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setID($value);
                break;
            case 1:
                $this->setCourseID($value);
                break;
            case 2:
                $this->setDayID($value);
                break;
            case 3:
                $this->setTimeStart($value);
                break;
            case 4:
                $this->setTimeEnd($value);
                break;
            case 5:
                $this->setPeriodStart($value);
                break;
            case 6:
                $this->setPeriodEnd($value);
                break;
            case 7:
                $this->setPlaceID($value);
                break;
            case 8:
                $this->setPrice($value);
                break;
            case 9:
                $this->setRegistrationURL($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = LessonPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setID($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCourseID($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDayID($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTimeStart($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTimeEnd($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPeriodStart($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPeriodEnd($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPlaceID($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPrice($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRegistrationURL($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LessonPeer::DATABASE_NAME);

        if ($this->isColumnModified(LessonPeer::ID)) $criteria->add(LessonPeer::ID, $this->id);
        if ($this->isColumnModified(LessonPeer::FK_COURSE)) $criteria->add(LessonPeer::FK_COURSE, $this->fk_course);
        if ($this->isColumnModified(LessonPeer::FK_DAY)) $criteria->add(LessonPeer::FK_DAY, $this->fk_day);
        if ($this->isColumnModified(LessonPeer::TIME_START)) $criteria->add(LessonPeer::TIME_START, $this->time_start);
        if ($this->isColumnModified(LessonPeer::TIME_END)) $criteria->add(LessonPeer::TIME_END, $this->time_end);
        if ($this->isColumnModified(LessonPeer::PERIOD_START)) $criteria->add(LessonPeer::PERIOD_START, $this->period_start);
        if ($this->isColumnModified(LessonPeer::PERIOD_END)) $criteria->add(LessonPeer::PERIOD_END, $this->period_end);
        if ($this->isColumnModified(LessonPeer::FK_PLACE)) $criteria->add(LessonPeer::FK_PLACE, $this->fk_place);
        if ($this->isColumnModified(LessonPeer::PRICE)) $criteria->add(LessonPeer::PRICE, $this->price);
        if ($this->isColumnModified(LessonPeer::REGISTRATION_URL)) $criteria->add(LessonPeer::REGISTRATION_URL, $this->registration_url);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(LessonPeer::DATABASE_NAME);
        $criteria->add(LessonPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getID();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setID($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getID();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Lesson (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCourseID($this->getCourseID());
        $copyObj->setDayID($this->getDayID());
        $copyObj->setTimeStart($this->getTimeStart());
        $copyObj->setTimeEnd($this->getTimeEnd());
        $copyObj->setPeriodStart($this->getPeriodStart());
        $copyObj->setPeriodEnd($this->getPeriodEnd());
        $copyObj->setPlaceID($this->getPlaceID());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setRegistrationURL($this->getRegistrationURL());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLessonToTeachers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLessonToTeacher($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setID(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Lesson Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return LessonPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LessonPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Course object.
     *
     * @param             Course $v
     * @return Lesson The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCourse(Course $v = null)
    {
        if ($v === null) {
            $this->setCourseID(NULL);
        } else {
            $this->setCourseID($v->getID());
        }

        $this->aCourse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Course object, it will not be re-added.
        if ($v !== null) {
            $v->addLesson($this);
        }


        return $this;
    }


    /**
     * Get the associated Course object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Course The associated Course object.
     * @throws PropelException
     */
    public function getCourse(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCourse === null && ($this->fk_course !== null) && $doQuery) {
            $this->aCourse = CourseQuery::create()->findPk($this->fk_course, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCourse->addLessons($this);
             */
        }

        return $this->aCourse;
    }

    /**
     * Declares an association between this object and a Day object.
     *
     * @param             Day $v
     * @return Lesson The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDay(Day $v = null)
    {
        if ($v === null) {
            $this->setDayID(NULL);
        } else {
            $this->setDayID($v->getID());
        }

        $this->aDay = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Day object, it will not be re-added.
        if ($v !== null) {
            $v->addLesson($this);
        }


        return $this;
    }


    /**
     * Get the associated Day object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Day The associated Day object.
     * @throws PropelException
     */
    public function getDay(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDay === null && ($this->fk_day !== null) && $doQuery) {
            $this->aDay = DayQuery::create()->findPk($this->fk_day, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDay->addLessons($this);
             */
        }

        return $this->aDay;
    }

    /**
     * Declares an association between this object and a Place object.
     *
     * @param             Place $v
     * @return Lesson The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlace(Place $v = null)
    {
        if ($v === null) {
            $this->setPlaceID(NULL);
        } else {
            $this->setPlaceID($v->getID());
        }

        $this->aPlace = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Place object, it will not be re-added.
        if ($v !== null) {
            $v->addLesson($this);
        }


        return $this;
    }


    /**
     * Get the associated Place object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Place The associated Place object.
     * @throws PropelException
     */
    public function getPlace(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPlace === null && ($this->fk_place !== null) && $doQuery) {
            $this->aPlace = PlaceQuery::create()->findPk($this->fk_place, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlace->addLessons($this);
             */
        }

        return $this->aPlace;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('LessonToTeacher' == $relationName) {
            $this->initLessonToTeachers();
        }
    }

    /**
     * Clears out the collLessonToTeachers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lesson The current object (for fluent API support)
     * @see        addLessonToTeachers()
     */
    public function clearLessonToTeachers()
    {
        $this->collLessonToTeachers = null; // important to set this to null since that means it is uninitialized
        $this->collLessonToTeachersPartial = null;

        return $this;
    }

    /**
     * reset is the collLessonToTeachers collection loaded partially
     *
     * @return void
     */
    public function resetPartialLessonToTeachers($v = true)
    {
        $this->collLessonToTeachersPartial = $v;
    }

    /**
     * Initializes the collLessonToTeachers collection.
     *
     * By default this just sets the collLessonToTeachers collection to an empty array (like clearcollLessonToTeachers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLessonToTeachers($overrideExisting = true)
    {
        if (null !== $this->collLessonToTeachers && !$overrideExisting) {
            return;
        }
        $this->collLessonToTeachers = new PropelObjectCollection();
        $this->collLessonToTeachers->setModel('LessonToTeacher');
    }

    /**
     * Gets an array of LessonToTeacher objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lesson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LessonToTeacher[] List of LessonToTeacher objects
     * @throws PropelException
     */
    public function getLessonToTeachers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLessonToTeachersPartial && !$this->isNew();
        if (null === $this->collLessonToTeachers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLessonToTeachers) {
                // return empty collection
                $this->initLessonToTeachers();
            } else {
                $collLessonToTeachers = LessonToTeacherQuery::create(null, $criteria)
                    ->filterByLesson($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLessonToTeachersPartial && count($collLessonToTeachers)) {
                      $this->initLessonToTeachers(false);

                      foreach($collLessonToTeachers as $obj) {
                        if (false == $this->collLessonToTeachers->contains($obj)) {
                          $this->collLessonToTeachers->append($obj);
                        }
                      }

                      $this->collLessonToTeachersPartial = true;
                    }

                    $collLessonToTeachers->getInternalIterator()->rewind();
                    return $collLessonToTeachers;
                }

                if($partial && $this->collLessonToTeachers) {
                    foreach($this->collLessonToTeachers as $obj) {
                        if($obj->isNew()) {
                            $collLessonToTeachers[] = $obj;
                        }
                    }
                }

                $this->collLessonToTeachers = $collLessonToTeachers;
                $this->collLessonToTeachersPartial = false;
            }
        }

        return $this->collLessonToTeachers;
    }

    /**
     * Sets a collection of LessonToTeacher objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lessonToTeachers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lesson The current object (for fluent API support)
     */
    public function setLessonToTeachers(PropelCollection $lessonToTeachers, PropelPDO $con = null)
    {
        $lessonToTeachersToDelete = $this->getLessonToTeachers(new Criteria(), $con)->diff($lessonToTeachers);

        $this->lessonToTeachersScheduledForDeletion = unserialize(serialize($lessonToTeachersToDelete));

        foreach ($lessonToTeachersToDelete as $lessonToTeacherRemoved) {
            $lessonToTeacherRemoved->setLesson(null);
        }

        $this->collLessonToTeachers = null;
        foreach ($lessonToTeachers as $lessonToTeacher) {
            $this->addLessonToTeacher($lessonToTeacher);
        }

        $this->collLessonToTeachers = $lessonToTeachers;
        $this->collLessonToTeachersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LessonToTeacher objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LessonToTeacher objects.
     * @throws PropelException
     */
    public function countLessonToTeachers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLessonToTeachersPartial && !$this->isNew();
        if (null === $this->collLessonToTeachers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLessonToTeachers) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getLessonToTeachers());
            }
            $query = LessonToTeacherQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLesson($this)
                ->count($con);
        }

        return count($this->collLessonToTeachers);
    }

    /**
     * Method called to associate a LessonToTeacher object to this object
     * through the LessonToTeacher foreign key attribute.
     *
     * @param    LessonToTeacher $l LessonToTeacher
     * @return Lesson The current object (for fluent API support)
     */
    public function addLessonToTeacher(LessonToTeacher $l)
    {
        if ($this->collLessonToTeachers === null) {
            $this->initLessonToTeachers();
            $this->collLessonToTeachersPartial = true;
        }
        if (!in_array($l, $this->collLessonToTeachers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLessonToTeacher($l);
        }

        return $this;
    }

    /**
     * @param	LessonToTeacher $lessonToTeacher The lessonToTeacher object to add.
     */
    protected function doAddLessonToTeacher($lessonToTeacher)
    {
        $this->collLessonToTeachers[]= $lessonToTeacher;
        $lessonToTeacher->setLesson($this);
    }

    /**
     * @param	LessonToTeacher $lessonToTeacher The lessonToTeacher object to remove.
     * @return Lesson The current object (for fluent API support)
     */
    public function removeLessonToTeacher($lessonToTeacher)
    {
        if ($this->getLessonToTeachers()->contains($lessonToTeacher)) {
            $this->collLessonToTeachers->remove($this->collLessonToTeachers->search($lessonToTeacher));
            if (null === $this->lessonToTeachersScheduledForDeletion) {
                $this->lessonToTeachersScheduledForDeletion = clone $this->collLessonToTeachers;
                $this->lessonToTeachersScheduledForDeletion->clear();
            }
            $this->lessonToTeachersScheduledForDeletion[]= clone $lessonToTeacher;
            $lessonToTeacher->setLesson(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Lesson is new, it will return
     * an empty collection; or if this Lesson has previously
     * been saved, it will retrieve related LessonToTeachers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Lesson.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LessonToTeacher[] List of LessonToTeacher objects
     */
    public function getLessonToTeachersJoinTeacher($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LessonToTeacherQuery::create(null, $criteria);
        $query->joinWith('Teacher', $join_behavior);

        return $this->getLessonToTeachers($query, $con);
    }

    /**
     * Clears out the collTeachers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lesson The current object (for fluent API support)
     * @see        addTeachers()
     */
    public function clearTeachers()
    {
        $this->collTeachers = null; // important to set this to null since that means it is uninitialized
        $this->collTeachersPartial = null;

        return $this;
    }

    /**
     * Initializes the collTeachers collection.
     *
     * By default this just sets the collTeachers collection to an empty collection (like clearTeachers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initTeachers()
    {
        $this->collTeachers = new PropelObjectCollection();
        $this->collTeachers->setModel('Teacher');
    }

    /**
     * Gets a collection of Teacher objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lesson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Teacher[] List of Teacher objects
     */
    public function getTeachers($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collTeachers || null !== $criteria) {
            if ($this->isNew() && null === $this->collTeachers) {
                // return empty collection
                $this->initTeachers();
            } else {
                $collTeachers = TeacherQuery::create(null, $criteria)
                    ->filterByLesson($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collTeachers;
                }
                $this->collTeachers = $collTeachers;
            }
        }

        return $this->collTeachers;
    }

    /**
     * Sets a collection of Teacher objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $teachers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lesson The current object (for fluent API support)
     */
    public function setTeachers(PropelCollection $teachers, PropelPDO $con = null)
    {
        $this->clearTeachers();
        $currentTeachers = $this->getTeachers();

        $this->teachersScheduledForDeletion = $currentTeachers->diff($teachers);

        foreach ($teachers as $teacher) {
            if (!$currentTeachers->contains($teacher)) {
                $this->doAddTeacher($teacher);
            }
        }

        $this->collTeachers = $teachers;

        return $this;
    }

    /**
     * Gets the number of Teacher objects related by a many-to-many relationship
     * to the current object by way of the lesson_to_teacher cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Teacher objects
     */
    public function countTeachers($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collTeachers || null !== $criteria) {
            if ($this->isNew() && null === $this->collTeachers) {
                return 0;
            } else {
                $query = TeacherQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByLesson($this)
                    ->count($con);
            }
        } else {
            return count($this->collTeachers);
        }
    }

    /**
     * Associate a Teacher object to this object
     * through the lesson_to_teacher cross reference table.
     *
     * @param  Teacher $teacher The LessonToTeacher object to relate
     * @return Lesson The current object (for fluent API support)
     */
    public function addTeacher(Teacher $teacher)
    {
        if ($this->collTeachers === null) {
            $this->initTeachers();
        }
        if (!$this->collTeachers->contains($teacher)) { // only add it if the **same** object is not already associated
            $this->doAddTeacher($teacher);

            $this->collTeachers[]= $teacher;
        }

        return $this;
    }

    /**
     * @param	Teacher $teacher The teacher object to add.
     */
    protected function doAddTeacher($teacher)
    {
        $lessonToTeacher = new LessonToTeacher();
        $lessonToTeacher->setTeacher($teacher);
        $this->addLessonToTeacher($lessonToTeacher);
    }

    /**
     * Remove a Teacher object to this object
     * through the lesson_to_teacher cross reference table.
     *
     * @param Teacher $teacher The LessonToTeacher object to relate
     * @return Lesson The current object (for fluent API support)
     */
    public function removeTeacher(Teacher $teacher)
    {
        if ($this->getTeachers()->contains($teacher)) {
            $this->collTeachers->remove($this->collTeachers->search($teacher));
            if (null === $this->teachersScheduledForDeletion) {
                $this->teachersScheduledForDeletion = clone $this->collTeachers;
                $this->teachersScheduledForDeletion->clear();
            }
            $this->teachersScheduledForDeletion[]= $teacher;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->fk_course = null;
        $this->fk_day = null;
        $this->time_start = null;
        $this->time_end = null;
        $this->period_start = null;
        $this->period_end = null;
        $this->fk_place = null;
        $this->price = null;
        $this->registration_url = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collLessonToTeachers) {
                foreach ($this->collLessonToTeachers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTeachers) {
                foreach ($this->collTeachers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCourse instanceof Persistent) {
              $this->aCourse->clearAllReferences($deep);
            }
            if ($this->aDay instanceof Persistent) {
              $this->aDay->clearAllReferences($deep);
            }
            if ($this->aPlace instanceof Persistent) {
              $this->aPlace->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLessonToTeachers instanceof PropelCollection) {
            $this->collLessonToTeachers->clearIterator();
        }
        $this->collLessonToTeachers = null;
        if ($this->collTeachers instanceof PropelCollection) {
            $this->collTeachers->clearIterator();
        }
        $this->collTeachers = null;
        $this->aCourse = null;
        $this->aDay = null;
        $this->aPlace = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LessonPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
