<?php


/**
 * Base class that represents a query for the 'teacher' table.
 *
 *
 *
 * @method TeacherQuery orderByID($order = Criteria::ASC) Order by the id column
 * @method TeacherQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method TeacherQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method TeacherQuery orderByPortraitImage($order = Criteria::ASC) Order by the portrait_image column
 * @method TeacherQuery orderByBio($order = Criteria::ASC) Order by the bio column
 * @method TeacherQuery orderByURL($order = Criteria::ASC) Order by the url column
 *
 * @method TeacherQuery groupByID() Group by the id column
 * @method TeacherQuery groupByFirstName() Group by the first_name column
 * @method TeacherQuery groupByLastName() Group by the last_name column
 * @method TeacherQuery groupByPortraitImage() Group by the portrait_image column
 * @method TeacherQuery groupByBio() Group by the bio column
 * @method TeacherQuery groupByURL() Group by the url column
 *
 * @method TeacherQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TeacherQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TeacherQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TeacherQuery leftJoinLessonToTeacher($relationAlias = null) Adds a LEFT JOIN clause to the query using the LessonToTeacher relation
 * @method TeacherQuery rightJoinLessonToTeacher($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LessonToTeacher relation
 * @method TeacherQuery innerJoinLessonToTeacher($relationAlias = null) Adds a INNER JOIN clause to the query using the LessonToTeacher relation
 *
 * @method Teacher findOne(PropelPDO $con = null) Return the first Teacher matching the query
 * @method Teacher findOneOrCreate(PropelPDO $con = null) Return the first Teacher matching the query, or a new Teacher object populated from the query conditions when no match is found
 *
 * @method Teacher findOneByFirstName(string $first_name) Return the first Teacher filtered by the first_name column
 * @method Teacher findOneByLastName(string $last_name) Return the first Teacher filtered by the last_name column
 * @method Teacher findOneByPortraitImage(string $portrait_image) Return the first Teacher filtered by the portrait_image column
 * @method Teacher findOneByBio(string $bio) Return the first Teacher filtered by the bio column
 * @method Teacher findOneByURL(string $url) Return the first Teacher filtered by the url column
 *
 * @method array findByID(int $id) Return Teacher objects filtered by the id column
 * @method array findByFirstName(string $first_name) Return Teacher objects filtered by the first_name column
 * @method array findByLastName(string $last_name) Return Teacher objects filtered by the last_name column
 * @method array findByPortraitImage(string $portrait_image) Return Teacher objects filtered by the portrait_image column
 * @method array findByBio(string $bio) Return Teacher objects filtered by the bio column
 * @method array findByURL(string $url) Return Teacher objects filtered by the url column
 *
 * @package    propel.generator.liltha.om
 */
abstract class BaseTeacherQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTeacherQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'liltha', $modelName = 'Teacher', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TeacherQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TeacherQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TeacherQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TeacherQuery) {
            return $criteria;
        }
        $query = new TeacherQuery();
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
     * @return   Teacher|Teacher[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TeacherPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TeacherPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Teacher A model object, or null if the key is not found
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
     * @return                 Teacher A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `first_name`, `last_name`, `portrait_image`, `bio`, `url` FROM `teacher` WHERE `id` = :p0';
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
            $obj = new Teacher();
            $obj->hydrate($row);
            TeacherPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Teacher|Teacher[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Teacher[]|mixed the list of results, formatted by the current formatter
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
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TeacherPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TeacherPeer::ID, $keys, Criteria::IN);
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
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByID($iD = null, $comparison = null)
    {
        if (is_array($iD)) {
            $useMinMax = false;
            if (isset($iD['min'])) {
                $this->addUsingAlias(TeacherPeer::ID, $iD['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iD['max'])) {
                $this->addUsingAlias(TeacherPeer::ID, $iD['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherPeer::ID, $iD, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstName)) {
                $firstName = str_replace('*', '%', $firstName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TeacherPeer::FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastName)) {
                $lastName = str_replace('*', '%', $lastName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TeacherPeer::LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the portrait_image column
     *
     * Example usage:
     * <code>
     * $query->filterByPortraitImage('fooValue');   // WHERE portrait_image = 'fooValue'
     * $query->filterByPortraitImage('%fooValue%'); // WHERE portrait_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $portraitImage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByPortraitImage($portraitImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($portraitImage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $portraitImage)) {
                $portraitImage = str_replace('*', '%', $portraitImage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TeacherPeer::PORTRAIT_IMAGE, $portraitImage, $comparison);
    }

    /**
     * Filter the query on the bio column
     *
     * Example usage:
     * <code>
     * $query->filterByBio('fooValue');   // WHERE bio = 'fooValue'
     * $query->filterByBio('%fooValue%'); // WHERE bio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByBio($bio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bio)) {
                $bio = str_replace('*', '%', $bio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TeacherPeer::BIO, $bio, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByURL('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByURL('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uRL The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function filterByURL($uRL = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uRL)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uRL)) {
                $uRL = str_replace('*', '%', $uRL);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TeacherPeer::URL, $uRL, $comparison);
    }

    /**
     * Filter the query by a related LessonToTeacher object
     *
     * @param   LessonToTeacher|PropelObjectCollection $lessonToTeacher  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TeacherQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLessonToTeacher($lessonToTeacher, $comparison = null)
    {
        if ($lessonToTeacher instanceof LessonToTeacher) {
            return $this
                ->addUsingAlias(TeacherPeer::ID, $lessonToTeacher->getTeacherID(), $comparison);
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
     * @return TeacherQuery The current query, for fluid interface
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
     * Filter the query by a related Lesson object
     * using the lesson_to_teacher table as cross reference
     *
     * @param   Lesson $lesson the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TeacherQuery The current query, for fluid interface
     */
    public function filterByLesson($lesson, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useLessonToTeacherQuery()
            ->filterByLesson($lesson, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Teacher $teacher Object to remove from the list of results
     *
     * @return TeacherQuery The current query, for fluid interface
     */
    public function prune($teacher = null)
    {
        if ($teacher) {
            $this->addUsingAlias(TeacherPeer::ID, $teacher->getID(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
