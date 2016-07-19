var ContentAssessor = require( "yoastseo/js/contentAssessor.js" );

var fleschReadingEase = require( "yoastseo/js/assessments/fleschReadingEaseAssessment.js" );
var paragraphTooLong = require( "yoastseo/js/assessments/paragraphTooLongAssessment.js" );
var sentenceLengthInText = require( "yoastseo/js/assessments/sentenceLengthInTextAssessment.js" );
var subheadingDistributionTooLong = require( "yoastseo/js/assessments/subheadingDistributionTooLongAssessment.js" );
var transitionWords = require( "yoastseo/js/assessments/transitionWordsAssessment.js" );
var passiveVoice = require( "yoastseo/js/assessments/passiveVoiceAssessment.js" );
var sentenceBeginnings = require( "yoastseo/js/assessments/sentenceBeginningsAssessment.js" );
var textPresence = require( "yoastseo/js/assessments/textPresenceAssessment.js" );

/**
 * Creates the Assessor
 *
 * @param {object} i18n The i18n object used for translations.
 * @constructor
 */
var TaxonomyContentAssessor = function( i18n ) {
	ContentAssessor.call( this, i18n, {} );

	this._assessments = [
		fleschReadingEase,
		subheadingDistributionTooLong,
		paragraphTooLong,
		sentenceLengthInText,
		transitionWords,
		passiveVoice,
		textPresence,
		sentenceBeginnings
	];
};

require( "util" ).inherits( TaxonomyContentAssessor, ContentAssessor );

// /**
//  * @inheritDoc
//  */
// TaxonomyContentAssessor.prototype.hasMarker = function( assessment ) {
// 	return false;
// }

module.exports = TaxonomyContentAssessor;
