<?php
/**
 * This file contains class::Entity
 * @package Runalyze\Model\Activity
 */

namespace Runalyze\Model\Activity;

use Runalyze\Data\Weather;
use Runalyze\Model;
use Runalyze\Model\Activity\Splits;

/**
 * Activity entity
 *
 * @author Hannes Christiansen
 * @package Runalyze\Model\Activity
 */
class Entity extends Model\EntityWithID {
	/**
	 * Key: timestamp
	 * @var string
	 */
	const TIMESTAMP = 'time';

	/**
	 * Key: timezone offset [minutes]
	 * @var string
	 */
	const TIMEZONE_OFFSET = 'timezone_offset';

	/**
	 * Key: timestamp created
	 * @var string
	 */
	const TIMESTAMP_CREATED = 'created';

	/**
	 * Key: timestamp last edit
	 * @var string
	 */
	const TIMESTAMP_EDITED = 'edited';

	/**
	 * Key: sportid
	 * @var string
	 */
	const SPORTID = 'sportid';

	/**
	 * Key: typeid
	 * @var string
	 */
	const TYPEID = 'typeid';

	/**
	 * Key: is public
	 * @var string
	 */
	const IS_PUBLIC = 'is_public';

	/**
	 * Key: is track
	 * @var string
	 */
	const IS_TRACK = 'is_track';

	/**
	 * Key: distance
	 * @var string
	 */
	const DISTANCE = 'distance';

	/**
	 * Key: time in seconds
	 * @var string
	 */
	const TIME_IN_SECONDS = 's';

	/**
	 * Key: elapsed time
	 * @var string
	 */
	const ELAPSED_TIME = 'elapsed_time';

	/**
	 * Key: elevation
	 * @var string
	 */
	const ELEVATION = 'elevation';

	/**
	 * Key: energy
	 * @var string
	 */
	const ENERGY = 'kcal';

	/**
	 * Key: average heart rate
	 * @var string
	 */
	const HR_AVG = 'pulse_avg';

	/**
	 * Key: maximal heart rate
	 * @var string
	 */
	const HR_MAX = 'pulse_max';

	/**
	 * Key: vdot
	 * @var string
	 */
	const VDOT = 'vdot';

	/**
	 * Key: vdot by time
	 * @var string
	 */
	const VDOT_BY_TIME = 'vdot_by_time';

	/**
	 * Key: vdot with elevation
	 * @var string
	 */
	const VDOT_WITH_ELEVATION = 'vdot_with_elevation';

	/**
	 * Key: use vdot
	 * @var string
	 */
	const USE_VDOT = 'use_vdot';

	/**
	 * Key: vdot estimate from fit file
	 * @var string
	 */
	const FIT_VO2MAX_ESTIMATE = 'fit_vdot_estimate';

	/**
	 * Key: recovery time from fit file
	 * @var string
	 */
	const FIT_RECOVERY_TIME = 'fit_recovery_time';

	/**
	 * Key: hrv analysis score from fit file
	 * @var string
	 */
	const FIT_HRV_ANALYSIS = 'fit_hrv_analysis';

	/**
	 * Key: total training effect from fit file
	 * @var string
	 */
	const FIT_TRAINING_EFFECT = 'fit_training_effect';

	/**
	 * Key: performance condition from fit file
	 * @var string
	 */
	const FIT_PERFORMANCE_CONDITION = 'fit_performance_condition';

	/**
	 * Key: jd intensity
	 * @var string
	 */
	const JD_INTENSITY = 'jd_intensity';

	/**
	 * Key: RPE
	 * @var string
	 */
	const RPE = 'rpe';

	/**
	 * Key: trimp
	 * @var string
	 */
	const TRIMP = 'trimp';

	/**
	 * Key: cadence
	 * @var string
	 */
	const CADENCE = 'cadence';

	/**
	 * Key: power
	 * @var string
	 */
	const POWER = 'power';

	/**
	 * Key: stride length
	 * @var string
	 */
	const STRIDE_LENGTH = 'stride_length';

	/**
	 * Key: total_strokes
	 * @var string
	 */
	const TOTAL_STROKES = 'total_strokes';

	/**
	 * Key: SWOLF
	 * @var string
	 */
	const SWOLF = 'swolf';

	/**
	 * Key: ground contact time
	 * @var string
	 */
	const GROUNDCONTACT = 'groundcontact';

	/**
	 * Key: vertical oscillation
	 * @var string
	 */
	const VERTICAL_OSCILLATION = 'vertical_oscillation';

	/**
	 * Key: ground contact time balance
	 * @var string
	 */
	const GROUNDCONTACT_BALANCE = 'groundcontact_balance';

	/**
	 * Key: vertical ratio
	 * @var string
	 */
	const VERTICAL_RATIO = 'vertical_ratio';

	/**
	 * Key: temperature
	 * @var string
	 */
	const TEMPERATURE = 'temperature';

	/**
	 * Key: wind speed
	 * @var string
	 */
	const WINDSPEED = 'wind_speed';

	/**
	 * Key: wind degree
	 * @var string
	 */
	const WINDDEG = 'wind_deg';

	/**
	 * Key: humidity
	 * @var string
	 */
	const HUMIDITY = 'humidity';

	/**
	 * Key: pressure
	 * @var string
	 */
	const PRESSURE = 'pressure';

	/**
	 * Key: weather id
	 * @var string
	 */
	const WEATHERID = 'weatherid';

	/**
	 * Key: weather source
	 * @var string
	 */
	const WEATHER_SOURCE = 'weather_source';

	/**
	 * Key: is night
	 * @var string
	 */
	const IS_NIGHT = 'is_night';

	/**
	 * Key: route id
	 * @var string
	 */
	const ROUTEID = 'routeid';

	/**
	 * Key: route
	 * @var string
	 * @deprecated
	 */
	const ROUTE = 'route';

	/**
	 * Key: splits
	 * @var string
	 */
	const SPLITS = 'splits';

	/**
	 * Key: comment
	 * @var string
	 */
	const COMMENT = 'comment';

	/**
	 * Key: partner
	 * @var string
	 */
	const PARTNER = 'partner';

	/**
	 * Key: notes
	 * @var string
	 */
	const NOTES = 'notes';

	/**
	 * Key: creator
	 * @var string
	 */
	const CREATOR = 'creator';

	/**
	 * Key: creator details
	 * @var string
	 */
	const CREATOR_DETAILS = 'creator_details';

	/**
	 * Key: activity id
	 * @var string
	 */
	const ACTIVITY_ID = 'activity_id';

	/**
	 * Weather
	 * @var \Runalyze\Data\Weather
	 */
	protected $Weather = null;

	/**
	 * Splits
	 * @var \Runalyze\Model\Activity\Splits\Entity
	 */
	protected $Splits = null;

	/**
	 * Partner
	 * @var \Runalyze\Model\Activity\Partner
	 */
	protected $Partner = null;

	/**
	 * Clone object
	 */
	public function __clone() {
		$this->cloneInternalObjects();
	}

	/**
	 * All properties
	 * @return array
	 */
	public static function allDatabaseProperties() {
		return array(
			self::TIMESTAMP,
			self::TIMEZONE_OFFSET,
			self::TIMESTAMP_CREATED,
			self::TIMESTAMP_EDITED,
			self::SPORTID,
			self::TYPEID,
			self::IS_PUBLIC,
			self::IS_TRACK,
			self::DISTANCE,
			self::TIME_IN_SECONDS,
			self::ELAPSED_TIME,
			self::ELEVATION,
			self::ENERGY,
			self::HR_AVG,
			self::HR_MAX,
			self::VDOT,
			self::VDOT_BY_TIME,
			self::VDOT_WITH_ELEVATION,
			self::USE_VDOT,
			self::FIT_VO2MAX_ESTIMATE,
			self::FIT_RECOVERY_TIME,
			self::FIT_HRV_ANALYSIS,
			self::FIT_TRAINING_EFFECT,
			self::FIT_PERFORMANCE_CONDITION,
			self::JD_INTENSITY,
			self::RPE,
			self::TRIMP,
			self::CADENCE,
			self::POWER,
			self::STRIDE_LENGTH,
			self::SWOLF,
			self::TOTAL_STROKES,
			self::GROUNDCONTACT,
			self::VERTICAL_OSCILLATION,
			self::GROUNDCONTACT_BALANCE,
			self::VERTICAL_RATIO,
			self::TEMPERATURE,
			self::WINDSPEED,
			self::WINDDEG,
			self::HUMIDITY,
			self::PRESSURE,
			self::WEATHERID,
			self::WEATHER_SOURCE,
			self::IS_NIGHT,
			self::ROUTEID,
			self::ROUTE,
			self::SPLITS,
			self::COMMENT,
			self::PARTNER,
			self::NOTES,
			self::CREATOR,
			self::CREATOR_DETAILS,
			self::ACTIVITY_ID
		);
	}

	/**
	 * Properties
	 * @return array
	 */
	public function properties() {
		return static::allDatabaseProperties();
	}

	/**
	 * Can set key?
	 * @param string $key
	 * @return boolean
	 */
	protected function canSet($key) {
		switch ($key) {
			case self::TEMPERATURE:
			case self::WINDSPEED:
			case self::WINDDEG:
			case self::HUMIDITY:
			case self::PRESSURE:
			case self::WEATHERID:
			case self::WEATHER_SOURCE:
			case self::PARTNER:
			case self::SPLITS:
				return false;
		}

		return true;
	}

	/**
	 * Can be null?
	 * @param string $key
	 * @return boolean
	 */
	protected function canBeNull($key) {
		switch ($key) {
            case self::TYPEID:
            case self::TIMESTAMP_CREATED:
            case self::TIMESTAMP_EDITED:
			case self::TIMEZONE_OFFSET:
            case self::DISTANCE:
            case self::ELAPSED_TIME:
            case self::ELEVATION:
            case self::ENERGY:
            case self::HR_AVG:
            case self::HR_MAX:
            case self::VDOT:
            case self::VDOT_BY_TIME:
            case self::VDOT_WITH_ELEVATION:
            case self::FIT_VO2MAX_ESTIMATE:
            case self::FIT_RECOVERY_TIME:
            case self::FIT_HRV_ANALYSIS:
            case self::FIT_TRAINING_EFFECT:
            case self::FIT_PERFORMANCE_CONDITION:
            case self::JD_INTENSITY:
            case self::RPE:
            case self::TRIMP:
            case self::CADENCE:
            case self::POWER:
            case self::TOTAL_STROKES:
            case self::SWOLF:
            case self::STRIDE_LENGTH:
            case self::GROUNDCONTACT:
            case self::GROUNDCONTACT_BALANCE:
            case self::VERTICAL_OSCILLATION:
            case self::VERTICAL_RATIO:
			case self::TEMPERATURE:
			case self::WINDSPEED:
			case self::WINDDEG:
			case self::HUMIDITY:
			case self::PRESSURE:
			case self::WEATHER_SOURCE:
			case self::IS_NIGHT:
			case self::NOTES:
			case self::CREATOR_DETAILS:
            case self::ROUTEID:
			case self::ACTIVITY_ID:
				return true;
		}

		return false;
	}

	/**
	 * Synchronize
	 */
	public function synchronize() {
		parent::synchronize();

		$this->ensureNullIfEmpty(self::ACTIVITY_ID);
		$this->ensureNullIfEmpty(self::IS_NIGHT, true);
        $this->ensureAllNullOrNumericValues();
		$this->ensureAllNumericValues();
		$this->synchronizeObjects();
	}

	protected function ensureAllNullOrNumericValues() {
        $this->ensureNullIfEmpty([
            self::TYPEID,
            self::TIMESTAMP_CREATED,
            self::TIMESTAMP_EDITED,
            self::TIMEZONE_OFFSET,
            self::DISTANCE,
            self::ELAPSED_TIME,
            self::ELEVATION,
            self::ENERGY,
            self::HR_AVG,
            self::HR_MAX,
            self::VDOT,
            self::VDOT_BY_TIME,
            self::VDOT_WITH_ELEVATION,
            self::FIT_VO2MAX_ESTIMATE,
            self::FIT_RECOVERY_TIME,
            self::FIT_HRV_ANALYSIS,
            self::FIT_TRAINING_EFFECT,
            self::FIT_PERFORMANCE_CONDITION,
            self::JD_INTENSITY,
            self::RPE,
            self::TRIMP,
            self::CADENCE,
            self::POWER,
            self::TOTAL_STROKES,
            self::SWOLF,
            self::STRIDE_LENGTH,
            self::GROUNDCONTACT,
            self::GROUNDCONTACT_BALANCE,
            self::VERTICAL_OSCILLATION,
            self::VERTICAL_RATIO,
            self::ROUTEID
        ], true, true);
    }

	/**
	 * Ensure that numeric fields get numeric values
	 */
	protected function ensureAllNumericValues() {
		$this->ensureNumericValue(array(
			self::SPORTID,
			self::TIMESTAMP,
			self::IS_PUBLIC,
			self::IS_TRACK,
			self::TIME_IN_SECONDS,
			self::USE_VDOT
		));
	}

	protected function synchronizeObjects() {
		$this->Data[self::TEMPERATURE] = $this->weather()->temperature()->value();
		$this->Data[self::WINDSPEED] = $this->weather()->windSpeed()->value();
		$this->Data[self::WINDDEG] = $this->weather()->windDegree()->value();
		$this->Data[self::HUMIDITY] = $this->weather()->humidity()->value();
		$this->Data[self::PRESSURE] = $this->weather()->pressure()->value();
		$this->Data[self::WEATHERID] = $this->weather()->condition()->id();
		$this->Data[self::WEATHER_SOURCE] = $this->weather()->source();
		$this->Data[self::SPLITS] = $this->splits()->asString();
		$this->Data[self::PARTNER] = $this->partner()->asString();
	}

	/**
	 * Timestamp
	 * @return int
	 */
	public function timestamp() {
		return $this->Data[self::TIMESTAMP];
	}

	/**
	 * @return bool
	 */
	public function knowsTimezoneOffset() {
		return (null !== $this->Data[self::TIMEZONE_OFFSET]);
	}

	/**
	 * @return int|null offset in minutes or null if unknown
	 */
	public function timezoneOffset() {
		return $this->Data[self::TIMEZONE_OFFSET];
	}

	/**
	 * Sportid
	 * @return int
	 */
	public function sportid() {
		return $this->Data[self::SPORTID];
	}

	/**
	 * Typeid
	 * @return null|int
	 */
	public function typeid() {
		return $this->Data[self::TYPEID];
	}

	/**
	 * Is public?
	 * @return bool
	 */
	public function isPublic() {
		return ($this->Data[self::IS_PUBLIC] == 1);
	}

	/**
	 * On track?
	 * @return bool
	 */
	public function isTrack() {
		return ($this->Data[self::IS_TRACK] == 1);
	}

	/**
	 * Distance
	 * @return null|float [km]
	 */
	public function distance() {
		return $this->Data[self::DISTANCE];
	}

	/**
	 * Time in seconds
	 * @return int [s]
	 */
	public function duration() {
		return $this->Data[self::TIME_IN_SECONDS];
	}

	/**
	 * Elapsed time
	 * @return null|int [s]
	 */
	public function elapsedTime() {
		return $this->Data[self::ELAPSED_TIME];
	}

	/**
	 * Elevation
	 * @return null|int [m]
	 */
	public function elevation() {
		return $this->Data[self::ELEVATION];
	}

	/**
	 * Energy
	 * @return null|int [kcal]
	 */
	public function energy() {
		return $this->Data[self::ENERGY];
	}

	/**
	 * Average heart rate
	 * @return null|int [bpm]
	 */
	public function hrAvg() {
		return $this->Data[self::HR_AVG];
	}

	/**
	 * Maximal heart rate
	 * @return null|int [bpm]
	 */
	public function hrMax() {
		return $this->Data[self::HR_MAX];
	}

	/**
	 * VDOT by heart rate
	 * @return null|float
	 */
	public function vdotByHeartRate() {
		return $this->Data[self::VDOT];
	}

	/**
	 * VDOT by time
	 * @return null|float
	 */
	public function vdotByTime() {
		return $this->Data[self::VDOT_BY_TIME];
	}

	/**
	 * VDOT with elevation
	 * @return null|float
	 */
	public function vdotWithElevation() {
		return $this->Data[self::VDOT_WITH_ELEVATION];
	}

	/**
	 * Uses VDOT for shape
	 * @return boolean
	 */
	public function usesVDOT() {
		return ($this->Data[self::USE_VDOT] == 1);
	}

	/**
	 * VO2max estimate from fit file
	 * @return fnull|loat
	 */
	public function fitVO2maxEstimate() {
		return $this->Data[self::FIT_VO2MAX_ESTIMATE];
	}

	/**
	 * Recovery time advisor from fit file
	 * @return null|int [min]
	 */
	public function fitRecoveryTime() {
		return $this->Data[self::FIT_RECOVERY_TIME];
	}

	/**
	 * HRV analysis score from fit file
	 * @return null|int
	 */
	public function fitHRVscore() {
		return $this->Data[self::FIT_HRV_ANALYSIS];
	}

	/**
	 * Total training effect
	 * @return null|float
	 */
	public function fitTrainingEffect() {
		return $this->Data[self::FIT_TRAINING_EFFECT];
	}

	/**
	 * Performance condition
	 * @return null|int
	 */
	public function fitPerformanceCondition() {
		return $this->Data[self::FIT_PERFORMANCE_CONDITION];
	}

	/**
	 * JD intensity
	 * @return null|int
	 */
	public function jdIntensity() {
		return $this->Data[self::JD_INTENSITY];
	}

	/**
	 * @return null|int
	 */
	public function rpe() {
		return $this->Data[self::RPE];
	}

	/**
	 * TRIMP
	 * @return null|int
	 */
	public function trimp() {
		return $this->Data[self::TRIMP];
	}

	/**
	 * Cadence
	 * @return null|int [rpm]
	 */
	public function cadence() {
		return $this->Data[self::CADENCE];
	}

	/**
	 * Power
	 * @return null|int [W]
	 */
	public function power() {
		return $this->Data[self::POWER];
	}

	/**
	 * Stride length
	 * @return null|int [cm]
	 */
	public function strideLength() {
		return $this->Data[self::STRIDE_LENGTH];
	}

	/**
	 * Total strokes
	 * @return null|int
	 */
	public function totalStrokes() {
		return $this->Data[self::TOTAL_STROKES];
	}

	/**
	 * Swolf
	 * @return null|int
	 */
	public function swolf() {
		return $this->Data[self::SWOLF];
	}

	/**
	 * Ground contact
	 * @return null|int [ms]
	 */
	public function groundcontact() {
		return $this->Data[self::GROUNDCONTACT];
	}

	/**
	 * Vertical oscillation
	 * @return null|int [mm]
	 */
	public function verticalOscillation() {
		return $this->Data[self::VERTICAL_OSCILLATION];
	}

	/**
	 * Ground contact time balance
	 * @return null|int [%oo]
	 */
	public function groundContactBalance() {
		return $this->Data[self::GROUNDCONTACT_BALANCE];
	}

	/**
	 * Ground contact time balance
	 * @return null|int [%]
	 */
	public function groundContactBalanceLeft() {
		return $this->Data[self::GROUNDCONTACT_BALANCE];
	}

	/**
	 * Ground contact time balance
	 * @return null|int [%]
	 */
	public function groundContactBalanceRight() {
	    if (null === $this->Data[self::GROUNDCONTACT_BALANCE]) {
	        return null;
        }

		return 10000 - $this->Data[self::GROUNDCONTACT_BALANCE];
	}

	/**
	 * Vertical ratio
	 * @return null|int [%o]
	 */
	public function verticalRatio() {
		return $this->Data[self::VERTICAL_RATIO];
	}

	/**
	 * Weather
	 * @return \Runalyze\Data\Weather
	 */
	public function weather() {
		if (is_null($this->Weather)) {
			$this->Weather = new Weather(
				new Weather\Temperature($this->Data[self::TEMPERATURE]),
				new Weather\Condition($this->Data[self::WEATHERID]),
				new Weather\WindSpeed($this->Data[self::WINDSPEED]),
				new Weather\WindDegree($this->Data[self::WINDDEG]),
				new Weather\Humidity($this->Data[self::HUMIDITY]),
				new Weather\Pressure($this->Data[self::PRESSURE])
			);
			$this->Weather->setSource($this->Data[self::WEATHER_SOURCE]);
		}

		return $this->Weather;
	}

	/**
	 * @return bool
	 */
	public function isNight() {
		return ($this->Data[self::IS_NIGHT] == 1);
	}

	/**
	 * @return bool
	 */
	public function knowsIfItIsNight() {
		return (null !== $this->Data[self::IS_NIGHT]);
	}

	/**
	 * Splits
	 * @return \Runalyze\Model\Activity\Splits\Entity
	 */
	public function splits() {
		if (is_null($this->Splits)) {
			$this->Splits = new Splits\Entity($this->Data[self::SPLITS]);
		}

		return $this->Splits;
	}

	/**
	 * Comment
	 * @return string
	 */
	public function comment() {
		return $this->Data[self::COMMENT];
	}

	/**
	 * Partner
	 * @return \Runalyze\Model\Activity\Partner
	 */
	public function partner() {
		if (is_null($this->Partner)) {
			$this->Partner = new Partner($this->Data[self::PARTNER]);
		}

		return $this->Partner;
	}

	/**
	 * Notes
	 * @return string
	 */
	public function notes() {
		return $this->Data[self::NOTES];
	}

	/**
	 * Unset running values
	 */
	public function unsetRunningValues() {
		$this->set(Entity::VDOT_BY_TIME, null);
		$this->set(Entity::VDOT, null);
		$this->set(Entity::VDOT_WITH_ELEVATION, null);
		$this->set(Entity::JD_INTENSITY, null);
	}
}
