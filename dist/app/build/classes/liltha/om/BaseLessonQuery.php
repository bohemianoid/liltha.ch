<?php


/**
 * Base class that represents a query for the 'lesson' table.
 *
 *
 *
 * @method LessonQuery orderByID($order = Criteria::ASC) Order by the id column
 * @method LessonQuery orderByCourseID($order = Criteria::ASC) Order by the fk_course column
 * @method LessonQuery orderByDayID($order = Criteria::ASC) Order by the fk_day column
 * @method LessonQuery orderByTimeStart($order = Criteria::ASC) Order by the time_start column
 * @method LessonQuery orderByTimeEnd($order = Criteria::ASC) Order by the time_end column
 * @method LessonQuery orderByPeriodStart($order = Criteria::ASC) Order by the period_start column
 * @method LessonQuery orderByPeriodEnd($order = Criteria::ASC) Order by the period_end column
 * @method LessonQuery orderByPlaceID($order = Criteria::ASC) Order by the fk_place column
 * @method LessonQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method LessonQuery orderByRegistrationURL($order = Criteria::ASC) Order by the registration_url column
 *
 * @method LessonQuery groupByID() Group by the id column
 * @method LessonQuery groupByCourseID() Group by the fk_course column
 * @method LessonQuery groupByDayID() Group by the fk_day column
 * @method LessonQuery groupByTimeStart() Group by the time_start column
 * @method LessonQuery groupByTimeEnd() Group by the time_end column
 * @method LessonQuery groupByPeriodStart() Group by the period_start column
 * @method LessonQuery groupByPeriodEnd() Group by the period_end column
 * @method LessonQuery groupByPlaceID() Group by the fk_place column
 * @method LessonQuery groupByPrice() Group by the price column
 * @method LessonQuery groupByRegistrationURL() Group by the registration_url column
 *
 * @method LessonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LessonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LessonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LessonQuery leftJoinCourse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Course relation
 * @method LessonQuery rightJoinCourse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Course relation
 * @method LessonQuery innerJoinCourse($relationAlias = null) Adds a INNER JOIN clause to the query using the Course relation
 *
 * @method LessonQuery leftJoinDay($relationAlias = null) Adds a LEFT JOIN clause to the query using the Day relation
 * @method LessonQuery rightJoinDay($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Day relation
 * @method LessonQuery innerJoinDay($relationAlias = null) Adds a INNER JOIN clause to the query using the Day relation
 *
 * @method LessonQuery leftJoinPlace($relationAlias = null) Adds a LEFT JOIN clause to the query using the Place relation
 * @method LessonQuery rightJoinPlace($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Place relation
 * @method LessonQuery innerJoinPlace($relationAlias = null) Adds a INNER JOIN clause to the query using the Place relation
 *
 * @method LessonQuery leftJoinLessonToTeacher($relationAlias = null) Adds a LEFT JOIN clause to the query using the LessonToTeacher relation
 * @method LessonQuery rightJoinLessonToTeacher($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LessonToTeacher relation
 * @method LessonQuery innerJoinLessonToTeacher($relationAlias = null) Adds a INNER JOIN clause to the query using the LessonToTeacher relation
 *
 * @method Lesson findOne(PropelPDO $con = null) Return the first Lesson matching the query
 * @method Lesson findOneOrCreate(PropelPDO $con = null) Return the first Lesson matching the query, or a new Lesson object populated from the query conditions when no match is found
 *
 * @method Lesson findOneByCourseID(int $fk_course) Return the first Lesson filtered by the fk_course column
 * @method Lesson findOneByDayID(int $fk_day) Return the first Lesson filtered by the fk_day column
 * @method Lesson findOneByTimeStart(string $time_start) Return the first Lesson filtered by the time_start column
 * @method Lesson findOneByTimeEnd(string $time_end) Return the first Lesson filtered by the time_end column
 * @method Lesson findOneByPeriodStart(string $period_start) Return the first Lesson filtered by the period_start column
 * @method Lesson findOneByPeriodEnd(string $period_end) Return the first Lesson filtered by the period_end column
 * @method Lesson findOneByPlaceID(int $fk_place) Return the first Lesson filtered by the fk_place column
 * @method Lesson findOneByPrice(int $price) Return the first Lesson filtered by the price column
 * @method Lesson findOneByRegistrationURL(string $registration_url) Return the first Lesson filtered by the registration_url column
 *
 * @method array findByID(int $id) Return Lesson objects filtered by the id column
 * @method array findByCourseID(int $fk_course) Return Lesson objects filtered by the fk_course column
 * @method array findByDayID(int $fk_day) Return Lesson objects filtered by the fk_day column
 * @method array findByTimeStart(string $time_start) Return Lesson objects filtered by the time_start column
 * @method array findByTimeEnd(string $time_end) Return Lesson objects filtered by the time_end column
 * @method array findByPeriodStart(string $period_start) Return Lesson objects filtered by the period_start column
 * @method array findByPeriodEnd(string $period_end) Return Lesson objects filtered by the period_end column
 * @method array findByPlaceID(int $fk_place) Return Lesson objects filtered by the fk_place column
 * @method array findByPrice(int $price) Return Lesson objects filtered by the price column
 * @method array findByRegistrationURL(string $registration_url) Return Lesson objects filtered by the registration_url column
 *
 * @package    propel.generator.liltha.om
 */
abstract class BaseLessonQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLessonQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'liltha', $modelName = 'Lesson', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LessonQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LessonQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LessonQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LessonQuery) {
            return $criteria;
        }
        $query = new LessonQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Lesson|Lesson[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LessonPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LessonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Lesson A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByID($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Lesson A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `fk_course`, `fk_day`, `time_start`, `time_end`, `period_start`, `period_end`, `fk_place`, `price`, `registration_url` FROM `lesson` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Lesson();
            $obj->hydrate($row);
            LessonPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Lesson|Lesson[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Lesson[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LessonPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LessonPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByID(1234); // WHERE id = 1234
     * $query->filterByID(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByID(array('min' => 12)); // WHERE id >= 12
     * $query->filterByID(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $iD The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByID($iD = null, $comparison = null)
    {
        if (is_array($iD)) {
            $useMinMax = false;
            if (isset($iD['min'])) {
                $this->addUsingAlias(LessonPeer::ID, $iD['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iD['max'])) {
                $this->addUsingAlias(LessonPeer::ID, $iD['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonPeer::ID, $iD, $comparison);
    }

    /**
     * Filter the query on the fk_course column
     *
     * Example usage:
     * <code>
     * $query->filterByCourseID(1234); // WHERE fk_course = 1234
     * $query->filterByCourseID(array(12, 34)); // WHERE fk_course IN (12, 34)
     * $query->filterByCourseID(array('min' => 12)); // WHERE fk_course >= 12
     * $query->filterByCourseID(array('max' => 12)); // WHERE fk_course <= 12
     * </code>
     *
     * @see       filterByCourse()
     *
     * @param     mixed $courseID The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByCourseID($courseID = null, $comparison = null)
    {
        if (is_array($courseID)) {
            $useMinMax = false;
            if (isset($courseID['min'])) {
                $this->addUsingAlias(LessonPeer::FK_COURSE, $courseID['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($courseID['max'])) {
                $this->addUsingAlias(LessonPeer::FK_COURSE, $courseID['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonPeer::FK_COURSE, $courseID, $comparison);
    }

    /**
     * Filter the query on the fk_day column
     *
     * Example usage:
     * <code>
     * $query->filterByDayID(1234); // WHERE fk_day = 1234
     * $query->filterByDayID(array(12, 34)); // WHERE fk_day IN (12, 34)
     * $query->filterByDayID(array('min' => 12)); // WHERE fk_day >= 12
     * $query->filterByDayID(array('max' => 12)); // WHERE fk_day <= 12
     * </code>
     *
     * @see       filterByDay()
     *
     * @param     mixed $dayID The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByDayID($dayID = null, $comparison = null)
    {
        if (is_array($dayID)) {
            $useMinMax = false;
            if (isset($dayID['min'])) {
                $this->addUsingAlias(LessonPeer::FK_DAY, $dayID['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dayID['max'])) {
                $this->addUsingAlias(LessonPeer::FK_DAY, $dayID['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonPeer::FK_DAY, $dayID, $comparison);
    }

    /**
     * Filter the query on the time_start column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeStart('fooValue');   // WHERE time_start = 'fooValue'
     * $query->filterByTimeStart('%fooValue%'); // WHERE time_start LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeStart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByTimeStart($timeStart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeStart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timeStart)) {
                $timeStart = str_replace('*', '%', $timeStart);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LessonPeer::TIME_START, $timeStart, $comparison);
    }

    /**
     * Filter the query on the time_end column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeEnd('fooValue');   // WHERE time_end = 'fooValue'
     * $query->filterByTimeEnd('%fooValue%'); // WHERE time_end LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeEnd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByTimeEnd($timeEnd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeEnd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timeEnd)) {
                $timeEnd = str_replace('*', '%', $timeEnd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LessonPeer::TIME_END, $timeEnd, $comparison);
    }

    /**
     * Filter the query on the period_start column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodStart('fooValue');   // WHERE period_start = 'fooValue'
     * $query->filterByPeriodStart('%fooValue%'); // WHERE period_start LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodStart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPeriodStart($periodStart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodStart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodStart)) {
                $periodStart = str_replace('*', '%', $periodStart);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LessonPeer::PERIOD_START, $periodStart, $comparison);
    }

    /**
     * Filter the query on the period_end column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodEnd('fooValue');   // WHERE period_end = 'fooValue'
     * $query->filterByPeriodEnd('%fooValue%'); // WHERE period_end LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodEnd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPeriodEnd($periodEnd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodEnd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodEnd)) {
                $periodEnd = str_replace('*', '%', $periodEnd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LessonPeer::PERIOD_END, $periodEnd, $comparison);
    }

    /**
     * Filter the query on the fk_place column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaceID(1234); // WHERE fk_place = 1234
     * $query->filterByPlaceID(array(12, 34)); // WHERE fk_place IN (12, 34)
     * $query->filterByPlaceID(array('min' => 12)); // WHERE fk_place >= 12
     * $query->filterByPlaceID(array('max' => 12)); // WHERE fk_place <= 12
     * </code>
     *
     * @see       filterByPlace()
     *
     * @param     mixed $placeID The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPlaceID($placeID = null, $comparison = null)
    {
        if (is_array($placeID)) {
            $useMinMax = false;
            if (isset($placeID['min'])) {
                $this->addUsingAlias(LessonPeer::FK_PLACE, $placeID['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($placeID['max'])) {
                $this->addUsingAlias(LessonPeer::FK_PLACE, $placeID['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonPeer::FK_PLACE, $placeID, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price >= 12
     * $query->filterByPrice(array('max' => 12)); // WHERE price <= 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(LessonPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(LessonPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LessonPeer::PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the registration_url column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrationURL('fooValue');   // WHERE registration_url = 'fooValue'
     * $query->filterByRegistrationURL('%fooValue%'); // WHERE registration_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registrationURL The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function filterByRegistrationURL($registrationURL = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registrationURL)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registrationURL)) {
                $registrationURL = str_replace('*', '%', $registrationURL);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LessonPeer::REGISTRATION_URL, $registrationURL, $comparison);
    }

    /**
     * Filter the query by a related Course object
     *
     * @param   Course|PropelObjectCollection $course The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCourse($course, $comparison = null)
    {
        if ($course instanceof Course) {
            return $this
                ->addUsingAlias(LessonPeer::FK_COURSE, $course->getID(), $comparison);
        } elseif ($course instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LessonPeer::FK_COURSE, $course->toKeyValue('PrimaryKey', 'ID'), $comparison);
        } else {
            throw new PropelException('filterByCourse() only accepts arguments of type Course or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Course relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function joinCourse($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Course');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Course');
        }

        return $this;
    }

    /**
     * Use the Course relation Course object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CourseQuery A secondary query class using the current class as primary query
     */
    public function useCourseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCourse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Course', 'CourseQuery');
    }

    /**
     * Filter the query by a related Day object
     *
     * @param   Day|PropelObjectCollection $day The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDay($day, $comparison = null)
    {
        if ($day instanceof Day) {
            return $this
                ->addUsingAlias(LessonPeer::FK_DAY, $day->getID(), $comparison);
        } elseif ($day instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LessonPeer::FK_DAY, $day->toKeyValue('PrimaryKey', 'ID'), $comparison);
        } else {
            throw new PropelException('filterByDay() only accepts arguments of type Day or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Day relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function joinDay($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Day');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Day');
        }

        return $this;
    }

    /**
     * Use the Day relation Day object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DayQuery A secondary query class using the current class as primary query
     */
    public function useDayQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDay($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Day', 'DayQuery');
    }

    /**
     * Filter the query by a related Place object
     *
     * @param   Place|PropelObjectCollection $place The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlace($place, $comparison = null)
    {
        if ($place instanceof Place) {
            return $this
                ->addUsingAlias(LessonPeer::FK_PLACE, $place->getID(), $comparison);
        } elseif ($place instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LessonPeer::FK_PLACE, $place->toKeyValue('PrimaryKey', 'ID'), $comparison);
        } else {
            throw new PropelException('filterByPlace() only accepts arguments of type Place or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Place relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function joinPlace($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Place');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Place');
        }

        return $this;
    }

    /**
     * Use the Place relation Place object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlaceQuery A secondary query class using the current class as primary query
     */
    public function usePlaceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlace($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Place', 'PlaceQuery');
    }

    /**
     * Filter the query by a related LessonToTeacher object
     *
     * @param   LessonToTeacher|PropelObjectCollection $lessonToTeacher  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LessonQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLessonToTeacher($lessonToTeacher, $comparison = null)
    {
        if ($lessonToTeacher instanceof LessonToTeacher) {
            return $this
                ->addUsingAlias(LessonPeer::ID, $lessonToTeacher->getLessonID(), $comparison);
        } elseif ($lessonToTeacher instanceof PropelObjectCollection) {
            return $this
                ->useLessonToTeacherQuery()
                ->filterByPrimaryKeys($lessonToTeacher->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLessonToTeacher() only accepts arguments of type LessonToTeacher or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LessonToTeacher relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function joinLessonToTeacher($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LessonToTeacher');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'LessonToTeacher');
        }

        return $this;
    }

    /**
     * Use the LessonToTeacher relation LessonToTeacher object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LessonToTeacherQuery A secondary query class using the current class as primary query
     */
    public function useLessonToTeacherQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLessonToTeacher($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LessonToTeacher', 'LessonToTeacherQuery');
    }

    /**
     * Filter the query by a related Teacher object
     * using the lesson_to_teacher table as cross reference
     *
     * @param   Teacher $teacher the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LessonQuery The current query, for fluid interface
     */
    public function filterByTeacher($teacher, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useLessonToTeacherQuery()
            ->filterByTeacher($teacher, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Lesson $lesson Object to remove from the list of results
     *
     * @return LessonQuery The current query, for fluid interface
     */
    public function prune($lesson = null)
    {
        if ($lesson) {
            $this->addUsingAlias(LessonPeer::ID, $lesson->getID(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
