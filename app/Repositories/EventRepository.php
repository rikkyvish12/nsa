<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class EventRepository
{
    public function getAllEvent() {
        return "Hello";
    }
    // public function getLeads()
    // {
    //     return PitchingLeads::query()
    //         ->with(['user:id,firstname,lastname,email,mobile_country_code'])
    //         ->when(request()->agentEmail, function ($query) {
    //             $query->whereHas('agent', function ($q) {
    //                 $q->where('email', request()->agentEmail);
    //             });
    //         })
    //         ->when(request()->userContact, function ($query) {
    //             $query->whereHas('user', function ($q1) {
    //                 if(filter_var(request()->userContact, FILTER_VALIDATE_EMAIL)) {
    //                     return $q1->where('email','like', '%' . request()->userContact . '%');
    //                 }
    //                 $q1->where('firstname','like', '%' . request()->userContact . '%');
    //             });
    //         })
    //         ->when(request()->countryId, function ($query) {
    //             $query->whereHas('user', function ($q1) {
    //                 $q1->whereIn('mobile_country_code', request()->countryId);
    //             });
    //         })
    //         ->when(request()->userId, function ($query) {
    //             $query->where('user_id', request()->userId);
    //         })
    //         ->when(request()->leadSource, function ($query) {
    //             $query->where('lead_source_type', request()->leadSource);
    //         })
    //         ->when(! is_null(request()->leadStatus), function ($query) {
    //             $query->where('lead_status', request()->leadStatus);
    //             if (request()->leadStatus == LEAD_STATUS_NEW) {
    //                 $query->orderByDesc('id');
    //             }
    //         })
    //         ->when(request()->followUpFrom, function ($query) {
    //             $query->where('follow_up_date', '>=', carbon()->parse(request()->followUpFrom)->startOfDay());
    //         })
    //         ->when(request()->followUpTo, function ($query) {
    //             $query->where('follow_up_date', '<=', carbon()->parse(request()->followUpTo)->endOfDay());
    //         })
    //         ->when(request()->followUpTag, function ($query) {
    //             $query->where('follow_up_tag', request()->followUpTag);
    //         })
    //         ->when(! is_null(request()->followUpCount), function ($query) {
    //             $query->where('follow_up_count', request()->followUpCount);
    //         })
    //         ->when(request()->userResponse, function ($query) {
    //             $query->where('user_response', request()->userResponse);
    //         })
    //         ->when(request()->assignedFrom, function ($query) {
    //             $query->where('created_at', '>=', carbon()->parse(request()->assignedFrom)->startOfDay());
    //         })
    //         ->when(request()->assignedTo, function ($query) {
    //             $query->where('created_at', '<=', carbon()->parse(request()->assignedTo)->endOfDay());
    //         })
    //         ->when(request()->followUpFrom || request()->followUpTo,
    //             function ($query) {
    //                 $query->orderBy('follow_up_date');
    //             },
    //             function ($query) {
    //                 $query->orderByDesc('id');
    //             }) 
    //         ->when(request()->mbInterest, function ($query) {
    //             $query->where('mb_interest', request()->mbInterest);
    //         })
    //         ->when(! is_null(request()->nationality), function ($query) {
    //             $query->whereHas('user', function ($q1) {
    //                 if (request()->nationality == '1') {
    //                     return $q1->where('mobile_country_code','!=', INDIAN_CITIZEN);
    //                 }
    //                 $q1->where('mobile_country_code',INDIAN_CITIZEN);
    //             });
    //         }) 
    //         ->when(request()->calling_status, function ($query) {
    //             $query->where('lead_status', '!=', LEAD_STATUS_NEW);
    //             if (request()->calling_status == '2') {
    //                 $query->whereDoesntHave('leadCallHistory', function ($qr) {
    //                     $qr->where('status', '1');
    //                     $qr->where('response', 'answered'); 
    //                 });
    //             }
    //         })
    //         ->when(is_numeric(request()->in_dialer), function ($query) {
    //             $query->where('in_dialer', request()->in_dialer);
    //         })
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->orderBy('follow_up_date')
    //         ->simplePaginate(15);
    // }

    // public function getLeadByType($type)
    // {   
    //     return PitchingLeads::query()
            
    //         ->with(['user:id,firstname,lastname,email,mobile_country_code'])
    //         ->when(request()->agentEmail, function ($query) {
    //             $query->whereHas('agent', function ($q) {
    //                 $q->where('email', request()->agentEmail);
    //             });
    //         })
    //         ->when(request()->userContact, function ($query) {
    //             $query->whereHas('user', function ($q1) {
    //                 if (filter_var(request()->userContact, FILTER_VALIDATE_EMAIL)) {
    //                     return $q1->where('email','like', '%' . request()->userContact . '%');
    //                 }
    //                 $q1->where('firstname','like', '%' . request()->userContact . '%');
    //             });
    //         })
    //         ->when(request()->countryId, function ($query) {
    //             $query->whereHas('user', function ($q1) {
    //                 $q1->whereIn('mobile_country_code', request()->countryId);
    //             });
    //         })
    //         ->when(request()->userId, function ($query) {
    //             $query->where('user_id', request()->userId);
    //         })
    //         ->when($type == 'closed-leads', function ($query) {
    //             $query->where('lead_status', LEAD_STATUS_CLOSED);
    //         })
    //         ->when($type == 'converted-leads', function ($query) {
    //             if (request()->conversionType) {
    //                 return $query->where('conversion_status', request()->conversionType);
    //             }
    //             $query->whereIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED]);
    //         })
    //         ->orderByDesc('id')
    //         ->paginate(15);
    // }

    // public function userDonationHistory($userId)
    // {
    //     return  Donation::query()->from('donations as d')
    //         ->select([
    //             'd.id', 'd.amount',
    //             'd.amount_dollar','d.payment_type_info',
    //             'd.payment_status','d.created','d.field_id',
    //             'extra.donation_classification'
    //         ])
    //         ->with(['campaign:id,slug_title'])
    //         ->leftJoin('donation_extra_info AS extra', function ($join) {
    //             $join->on('d.id', '=', 'extra.donation_id');
    //         })
    //         ->where('d.user_id', $userId)
    //         ->where('d.payment_status', PAYMENT_SUCCESS_STATUS)
    //         ->limit(5)
    //         ->orderBy('d.id', 'DESC')
    //         ->get();
    // }

    // public function getLeadCount() {

    //     return PitchingLeads :: query()->from('pitching_leads')
    //         ->select('lead_status', DB::raw('COUNT(*) as totalCount'))
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->groupBy('lead_status')
    //         ->get();                                    
    // }

    // public function getFollowupCount() {

    //     return PitchingLeads :: query()->from('pitching_leads')
    //         ->select('follow_up_count', DB::raw('COUNT(*) as totalCount'))
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->groupBy('follow_up_count')
    //         ->get();                                    
    // }

    // public function getDonorResponse() {

    //     return PitchingLeads :: query()->from('pitching_leads')
    //         ->select('user_response', DB::raw('COUNT(*) as totalCount'))
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->whereNotNull('user_response')
    //         ->groupBy('user_response')
    //         ->get();                                    
    // }

    // public function getAgentConversion() {

    //     return PitchingLeads :: query()->from('pitching_leads')
    //         ->select('conversion_status', DB::raw('COUNT(*) as totalCount'))
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->whereIn('conversion_status',[PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->groupBy('conversion_status')
    //         ->get();                                    
    // }

    // public static function getTabCount() {

    //     $dateTime = \Carbon\Carbon::yesterday();
    //     $yesterday = \Carbon\Carbon::yesterday();
    //     $previous6MonthDate = $yesterday->subMonth(6);
    //     $previous6MonthDate = \Carbon\Carbon::parse($previous6MonthDate)->format('Y-m-d');
    //     $yesterday = \Carbon\Carbon::parse($dateTime)->format('Y-m-d');

    //     $today = \Carbon\Carbon::now();
    //     $today = \Carbon\Carbon::parse($today)->format('Y-m-d');

    //     $dateTime = \Carbon\Carbon::tomorrow();
    //     $tomorrow = \Carbon\Carbon::tomorrow();
    //     $next6MonthDate = $tomorrow->addMonth(6);
    //     $next6MonthDate = \Carbon\Carbon::parse($next6MonthDate)->format('Y-m-d');
    //     $tomorrow = \Carbon\Carbon::parse($dateTime)->format('Y-m-d');

    //      $new =  PitchingLeads :: query()->from('pitching_leads')
    //         ->where('lead_status', LEAD_STATUS_NEW)
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count();

    //     $allLead =  PitchingLeads :: query()->from('pitching_leads')
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count();

    //     $pending =  PitchingLeads :: query()->from('pitching_leads')
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('follow_up_date', '>=', $previous6MonthDate)
    //         ->where('follow_up_date', '<=', $yesterday)
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count();
            
    //     $present =  PitchingLeads :: query()->from('pitching_leads')
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('follow_up_date', '>=', carbon()->parse($today)->startOfDay())
    //         ->where('follow_up_date', '<=', carbon()->parse($today)->endOfDay())
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count(); 
            
    //     $future =  PitchingLeads :: query()->from('pitching_leads')
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->where('follow_up_date', '>=', carbon()->parse($tomorrow)->startOfDay())
    //         ->where('follow_up_date', '<=', carbon()->parse($next6MonthDate)->endOfDay())
    //         ->where('lead_status', '!=', LEAD_STATUS_CLOSED)
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count();
            
    //     $unanswered =  PitchingLeads :: query()->from('pitching_leads')
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', getLoggedInUserId());
    //         })
    //         ->whereNotIn('lead_status', [LEAD_STATUS_NEW, LEAD_STATUS_CLOSED])
    //         ->whereDoesntHave('leadCallHistory', function ($qr) {
    //                     $qr->where('status', '1');
    //                     $qr->where('response', 'answered'); 
    //         })
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->count();      

    //     return ['all-leads'=>$allLead, 'new'=>$new, 'pending-follow-up'=>$pending, 'present-follow-up'=>$present, 'future-follow-up'=>$future, 'unanswered'=>$unanswered ];    
    // }

    // public static function leadCount()
    // {
    //     return PitchingLeads::query()->from('pitching_leads')
    //         ->select(DB::raw('COUNT(*) as newLeadCount'))
    //         ->where('lead_status', LEAD_STATUS_NEW)
    //         ->when(Gate::denies('lead-all-list'), function ($query) {
    //             $query->where('agent_id', auth()->id());
    //         })
    //         ->whereNotIn('conversion_status', [PITCHING_LEAD_AGENT_CONVERTED,PITCHING_LEAD_SYS_CONVERTED])
    //         ->where('is_deleted', '!=', 1)
    //         ->first();
    // }

    // public function userDetails($lead)
    // {
    //     return User::query()
    //             ->select('id','email','firstname','lastname','mobile','mobile_country_code')
    //             ->where('id', $lead->user_id)
    //             ->first();                                 
    // }

    // public static function hasAllLeadAccess()
    // {
    //     return Gate::allows('lead-all-list');
    // }
}
