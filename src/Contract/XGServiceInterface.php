<?php
declare(strict_types=1);
namespace GiocoPlus\XG\Contract;
/**
 * Xtreme Gaming
 */
interface XGServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $backUrl
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $backUrl = null);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $opCode
     * @param integer $pastMinutes
     * @param string $cacheKey
     * @return mixed
     */
    function betLogGrabber(string $opCode, int $pastMinutes, string $cacheKey);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $pastMinutes
     * @return mixed
     */
    function betLogGrabberAll(int $pastMinutes);
}

