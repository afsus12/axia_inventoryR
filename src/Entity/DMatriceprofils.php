<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMatriceprofils
 *
 * @ORM\Table(name="D_MATRICEPROFILS")
 * @ORM\Entity
 */
class DMatriceprofils
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="PRO_Code", type="string", length=50, nullable=true)
     */
    private $proCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1000", type="boolean", nullable=true)
     */
    private $c1000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1010", type="boolean", nullable=true)
     */
    private $c1010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1011", type="boolean", nullable=true)
     */
    private $c1011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1012", type="boolean", nullable=true)
     */
    private $c1012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1013", type="boolean", nullable=true)
     */
    private $c1013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1014", type="boolean", nullable=true)
     */
    private $c1014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1015", type="boolean", nullable=true)
     */
    private $c1015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1050", type="boolean", nullable=true)
     */
    private $c1050;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1051", type="boolean", nullable=true)
     */
    private $c1051;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1052", type="boolean", nullable=true)
     */
    private $c1052;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1053", type="boolean", nullable=true)
     */
    private $c1053;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1054", type="boolean", nullable=true)
     */
    private $c1054;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1055", type="boolean", nullable=true)
     */
    private $c1055;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1110", type="boolean", nullable=true)
     */
    private $c1110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1111", type="boolean", nullable=true)
     */
    private $c1111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1112", type="boolean", nullable=true)
     */
    private $c1112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1113", type="boolean", nullable=true)
     */
    private $c1113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1114", type="boolean", nullable=true)
     */
    private $c1114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1115", type="boolean", nullable=true)
     */
    private $c1115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1130", type="boolean", nullable=true)
     */
    private $c1130;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1131", type="boolean", nullable=true)
     */
    private $c1131;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1132", type="boolean", nullable=true)
     */
    private $c1132;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1133", type="boolean", nullable=true)
     */
    private $c1133;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1134", type="boolean", nullable=true)
     */
    private $c1134;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1135", type="boolean", nullable=true)
     */
    private $c1135;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1136", type="boolean", nullable=true)
     */
    private $c1136;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1137", type="boolean", nullable=true)
     */
    private $c1137;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1150", type="boolean", nullable=true)
     */
    private $c1150;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1151", type="boolean", nullable=true)
     */
    private $c1151;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1152", type="boolean", nullable=true)
     */
    private $c1152;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1153", type="boolean", nullable=true)
     */
    private $c1153;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1154", type="boolean", nullable=true)
     */
    private $c1154;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1155", type="boolean", nullable=true)
     */
    private $c1155;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1156", type="boolean", nullable=true)
     */
    private $c1156;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1157", type="boolean", nullable=true)
     */
    private $c1157;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1158", type="boolean", nullable=true)
     */
    private $c1158;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1159", type="boolean", nullable=true)
     */
    private $c1159;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1160", type="boolean", nullable=true)
     */
    private $c1160;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1161", type="boolean", nullable=true)
     */
    private $c1161;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1162", type="boolean", nullable=true)
     */
    private $c1162;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1163", type="boolean", nullable=true)
     */
    private $c1163;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1164", type="boolean", nullable=true)
     */
    private $c1164;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1165", type="boolean", nullable=true)
     */
    private $c1165;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1166", type="boolean", nullable=true)
     */
    private $c1166;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1167", type="boolean", nullable=true)
     */
    private $c1167;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1168", type="boolean", nullable=true)
     */
    private $c1168;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1169", type="boolean", nullable=true)
     */
    private $c1169;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1170", type="boolean", nullable=true)
     */
    private $c1170;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1171", type="boolean", nullable=true)
     */
    private $c1171;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1172", type="boolean", nullable=true)
     */
    private $c1172;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1173", type="boolean", nullable=true)
     */
    private $c1173;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1174", type="boolean", nullable=true)
     */
    private $c1174;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1175", type="boolean", nullable=true)
     */
    private $c1175;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1176", type="boolean", nullable=true)
     */
    private $c1176;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1177", type="boolean", nullable=true)
     */
    private $c1177;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1178", type="boolean", nullable=true)
     */
    private $c1178;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1179", type="boolean", nullable=true)
     */
    private $c1179;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1180", type="boolean", nullable=true)
     */
    private $c1180;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1181", type="boolean", nullable=true)
     */
    private $c1181;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1182", type="boolean", nullable=true)
     */
    private $c1182;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1183", type="boolean", nullable=true)
     */
    private $c1183;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1184", type="boolean", nullable=true)
     */
    private $c1184;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1185", type="boolean", nullable=true)
     */
    private $c1185;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1186", type="boolean", nullable=true)
     */
    private $c1186;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1187", type="boolean", nullable=true)
     */
    private $c1187;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1188", type="boolean", nullable=true)
     */
    private $c1188;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1189", type="boolean", nullable=true)
     */
    private $c1189;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1190", type="boolean", nullable=true)
     */
    private $c1190;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1191", type="boolean", nullable=true)
     */
    private $c1191;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1192", type="boolean", nullable=true)
     */
    private $c1192;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1193", type="boolean", nullable=true)
     */
    private $c1193;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1194", type="boolean", nullable=true)
     */
    private $c1194;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1195", type="boolean", nullable=true)
     */
    private $c1195;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1196", type="boolean", nullable=true)
     */
    private $c1196;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1197", type="boolean", nullable=true)
     */
    private $c1197;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1198", type="boolean", nullable=true)
     */
    private $c1198;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1199", type="boolean", nullable=true)
     */
    private $c1199;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1200", type="boolean", nullable=true)
     */
    private $c1200;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1201", type="boolean", nullable=true)
     */
    private $c1201;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1202", type="boolean", nullable=true)
     */
    private $c1202;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1203", type="boolean", nullable=true)
     */
    private $c1203;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1204", type="boolean", nullable=true)
     */
    private $c1204;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1205", type="boolean", nullable=true)
     */
    private $c1205;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1206", type="boolean", nullable=true)
     */
    private $c1206;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1207", type="boolean", nullable=true)
     */
    private $c1207;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1208", type="boolean", nullable=true)
     */
    private $c1208;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1209", type="boolean", nullable=true)
     */
    private $c1209;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1210", type="boolean", nullable=true)
     */
    private $c1210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1211", type="boolean", nullable=true)
     */
    private $c1211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1212", type="boolean", nullable=true)
     */
    private $c1212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1213", type="boolean", nullable=true)
     */
    private $c1213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1214", type="boolean", nullable=true)
     */
    private $c1214;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1215", type="boolean", nullable=true)
     */
    private $c1215;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1250", type="boolean", nullable=true)
     */
    private $c1250;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1251", type="boolean", nullable=true)
     */
    private $c1251;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1252", type="boolean", nullable=true)
     */
    private $c1252;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1253", type="boolean", nullable=true)
     */
    private $c1253;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1254", type="boolean", nullable=true)
     */
    private $c1254;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1255", type="boolean", nullable=true)
     */
    private $c1255;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1310", type="boolean", nullable=true)
     */
    private $c1310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1311", type="boolean", nullable=true)
     */
    private $c1311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1312", type="boolean", nullable=true)
     */
    private $c1312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1313", type="boolean", nullable=true)
     */
    private $c1313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1314", type="boolean", nullable=true)
     */
    private $c1314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1315", type="boolean", nullable=true)
     */
    private $c1315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1410", type="boolean", nullable=true)
     */
    private $c1410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1411", type="boolean", nullable=true)
     */
    private $c1411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1412", type="boolean", nullable=true)
     */
    private $c1412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1413", type="boolean", nullable=true)
     */
    private $c1413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1414", type="boolean", nullable=true)
     */
    private $c1414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1415", type="boolean", nullable=true)
     */
    private $c1415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1450", type="boolean", nullable=true)
     */
    private $c1450;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1451", type="boolean", nullable=true)
     */
    private $c1451;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1452", type="boolean", nullable=true)
     */
    private $c1452;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1453", type="boolean", nullable=true)
     */
    private $c1453;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1454", type="boolean", nullable=true)
     */
    private $c1454;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1455", type="boolean", nullable=true)
     */
    private $c1455;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1510", type="boolean", nullable=true)
     */
    private $c1510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1511", type="boolean", nullable=true)
     */
    private $c1511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1512", type="boolean", nullable=true)
     */
    private $c1512;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1513", type="boolean", nullable=true)
     */
    private $c1513;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1514", type="boolean", nullable=true)
     */
    private $c1514;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1515", type="boolean", nullable=true)
     */
    private $c1515;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1516", type="boolean", nullable=true)
     */
    private $c1516;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1517", type="boolean", nullable=true)
     */
    private $c1517;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1518", type="boolean", nullable=true)
     */
    private $c1518;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1550", type="boolean", nullable=true)
     */
    private $c1550;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1551", type="boolean", nullable=true)
     */
    private $c1551;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1552", type="boolean", nullable=true)
     */
    private $c1552;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1553", type="boolean", nullable=true)
     */
    private $c1553;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1554", type="boolean", nullable=true)
     */
    private $c1554;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1555", type="boolean", nullable=true)
     */
    private $c1555;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1610", type="boolean", nullable=true)
     */
    private $c1610;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1611", type="boolean", nullable=true)
     */
    private $c1611;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1612", type="boolean", nullable=true)
     */
    private $c1612;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1613", type="boolean", nullable=true)
     */
    private $c1613;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1614", type="boolean", nullable=true)
     */
    private $c1614;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1615", type="boolean", nullable=true)
     */
    private $c1615;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1650", type="boolean", nullable=true)
     */
    private $c1650;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1651", type="boolean", nullable=true)
     */
    private $c1651;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1652", type="boolean", nullable=true)
     */
    private $c1652;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1653", type="boolean", nullable=true)
     */
    private $c1653;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1654", type="boolean", nullable=true)
     */
    private $c1654;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1655", type="boolean", nullable=true)
     */
    private $c1655;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1710", type="boolean", nullable=true)
     */
    private $c1710;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1711", type="boolean", nullable=true)
     */
    private $c1711;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1712", type="boolean", nullable=true)
     */
    private $c1712;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1713", type="boolean", nullable=true)
     */
    private $c1713;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1750", type="boolean", nullable=true)
     */
    private $c1750;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1751", type="boolean", nullable=true)
     */
    private $c1751;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1752", type="boolean", nullable=true)
     */
    private $c1752;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1753", type="boolean", nullable=true)
     */
    private $c1753;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1754", type="boolean", nullable=true)
     */
    private $c1754;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1755", type="boolean", nullable=true)
     */
    private $c1755;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1810", type="boolean", nullable=true)
     */
    private $c1810;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1811", type="boolean", nullable=true)
     */
    private $c1811;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1812", type="boolean", nullable=true)
     */
    private $c1812;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1813", type="boolean", nullable=true)
     */
    private $c1813;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1814", type="boolean", nullable=true)
     */
    private $c1814;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1815", type="boolean", nullable=true)
     */
    private $c1815;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1830", type="boolean", nullable=true)
     */
    private $c1830;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1831", type="boolean", nullable=true)
     */
    private $c1831;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1832", type="boolean", nullable=true)
     */
    private $c1832;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1833", type="boolean", nullable=true)
     */
    private $c1833;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1834", type="boolean", nullable=true)
     */
    private $c1834;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1835", type="boolean", nullable=true)
     */
    private $c1835;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1850", type="boolean", nullable=true)
     */
    private $c1850;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1851", type="boolean", nullable=true)
     */
    private $c1851;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1852", type="boolean", nullable=true)
     */
    private $c1852;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1853", type="boolean", nullable=true)
     */
    private $c1853;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1854", type="boolean", nullable=true)
     */
    private $c1854;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1855", type="boolean", nullable=true)
     */
    private $c1855;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1910", type="boolean", nullable=true)
     */
    private $c1910;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1911", type="boolean", nullable=true)
     */
    private $c1911;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1912", type="boolean", nullable=true)
     */
    private $c1912;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1913", type="boolean", nullable=true)
     */
    private $c1913;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1914", type="boolean", nullable=true)
     */
    private $c1914;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1950", type="boolean", nullable=true)
     */
    private $c1950;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1951", type="boolean", nullable=true)
     */
    private $c1951;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1952", type="boolean", nullable=true)
     */
    private $c1952;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1953", type="boolean", nullable=true)
     */
    private $c1953;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1954", type="boolean", nullable=true)
     */
    private $c1954;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C1955", type="boolean", nullable=true)
     */
    private $c1955;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2000", type="boolean", nullable=true)
     */
    private $c2000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2100", type="boolean", nullable=true)
     */
    private $c2100;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2110", type="boolean", nullable=true)
     */
    private $c2110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2111", type="boolean", nullable=true)
     */
    private $c2111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2112", type="boolean", nullable=true)
     */
    private $c2112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2113", type="boolean", nullable=true)
     */
    private $c2113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2120", type="boolean", nullable=true)
     */
    private $c2120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2121", type="boolean", nullable=true)
     */
    private $c2121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2122", type="boolean", nullable=true)
     */
    private $c2122;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2123", type="boolean", nullable=true)
     */
    private $c2123;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2130", type="boolean", nullable=true)
     */
    private $c2130;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2131", type="boolean", nullable=true)
     */
    private $c2131;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2132", type="boolean", nullable=true)
     */
    private $c2132;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2133", type="boolean", nullable=true)
     */
    private $c2133;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2140", type="boolean", nullable=true)
     */
    private $c2140;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2141", type="boolean", nullable=true)
     */
    private $c2141;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2142", type="boolean", nullable=true)
     */
    private $c2142;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2143", type="boolean", nullable=true)
     */
    private $c2143;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2150", type="boolean", nullable=true)
     */
    private $c2150;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2151", type="boolean", nullable=true)
     */
    private $c2151;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2152", type="boolean", nullable=true)
     */
    private $c2152;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2153", type="boolean", nullable=true)
     */
    private $c2153;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2160", type="boolean", nullable=true)
     */
    private $c2160;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2161", type="boolean", nullable=true)
     */
    private $c2161;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2162", type="boolean", nullable=true)
     */
    private $c2162;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2163", type="boolean", nullable=true)
     */
    private $c2163;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2200", type="boolean", nullable=true)
     */
    private $c2200;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2210", type="boolean", nullable=true)
     */
    private $c2210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2211", type="boolean", nullable=true)
     */
    private $c2211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2212", type="boolean", nullable=true)
     */
    private $c2212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2213", type="boolean", nullable=true)
     */
    private $c2213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2220", type="boolean", nullable=true)
     */
    private $c2220;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2221", type="boolean", nullable=true)
     */
    private $c2221;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2222", type="boolean", nullable=true)
     */
    private $c2222;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2223", type="boolean", nullable=true)
     */
    private $c2223;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2230", type="boolean", nullable=true)
     */
    private $c2230;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2231", type="boolean", nullable=true)
     */
    private $c2231;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2232", type="boolean", nullable=true)
     */
    private $c2232;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2233", type="boolean", nullable=true)
     */
    private $c2233;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2240", type="boolean", nullable=true)
     */
    private $c2240;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2241", type="boolean", nullable=true)
     */
    private $c2241;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2242", type="boolean", nullable=true)
     */
    private $c2242;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2243", type="boolean", nullable=true)
     */
    private $c2243;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2250", type="boolean", nullable=true)
     */
    private $c2250;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2251", type="boolean", nullable=true)
     */
    private $c2251;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2252", type="boolean", nullable=true)
     */
    private $c2252;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2253", type="boolean", nullable=true)
     */
    private $c2253;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2260", type="boolean", nullable=true)
     */
    private $c2260;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2261", type="boolean", nullable=true)
     */
    private $c2261;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2262", type="boolean", nullable=true)
     */
    private $c2262;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2263", type="boolean", nullable=true)
     */
    private $c2263;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2270", type="boolean", nullable=true)
     */
    private $c2270;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2271", type="boolean", nullable=true)
     */
    private $c2271;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2272", type="boolean", nullable=true)
     */
    private $c2272;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C2273", type="boolean", nullable=true)
     */
    private $c2273;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3000", type="boolean", nullable=true)
     */
    private $c3000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3001", type="boolean", nullable=true)
     */
    private $c3001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3010", type="boolean", nullable=true)
     */
    private $c3010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3011", type="boolean", nullable=true)
     */
    private $c3011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3012", type="boolean", nullable=true)
     */
    private $c3012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3013", type="boolean", nullable=true)
     */
    private $c3013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3014", type="boolean", nullable=true)
     */
    private $c3014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3015", type="boolean", nullable=true)
     */
    private $c3015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3016", type="boolean", nullable=true)
     */
    private $c3016;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3017", type="boolean", nullable=true)
     */
    private $c3017;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3018", type="boolean", nullable=true)
     */
    private $c3018;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3019", type="boolean", nullable=true)
     */
    private $c3019;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3020", type="boolean", nullable=true)
     */
    private $c3020;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3021", type="boolean", nullable=true)
     */
    private $c3021;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3022", type="boolean", nullable=true)
     */
    private $c3022;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3023", type="boolean", nullable=true)
     */
    private $c3023;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3024", type="boolean", nullable=true)
     */
    private $c3024;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3025", type="boolean", nullable=true)
     */
    private $c3025;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3026", type="boolean", nullable=true)
     */
    private $c3026;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3027", type="boolean", nullable=true)
     */
    private $c3027;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3028", type="boolean", nullable=true)
     */
    private $c3028;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3029", type="boolean", nullable=true)
     */
    private $c3029;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3210", type="boolean", nullable=true)
     */
    private $c3210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3211", type="boolean", nullable=true)
     */
    private $c3211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3212", type="boolean", nullable=true)
     */
    private $c3212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3213", type="boolean", nullable=true)
     */
    private $c3213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3214", type="boolean", nullable=true)
     */
    private $c3214;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3215", type="boolean", nullable=true)
     */
    private $c3215;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3216", type="boolean", nullable=true)
     */
    private $c3216;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3217", type="boolean", nullable=true)
     */
    private $c3217;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3218", type="boolean", nullable=true)
     */
    private $c3218;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3219", type="boolean", nullable=true)
     */
    private $c3219;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3220", type="boolean", nullable=true)
     */
    private $c3220;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3221", type="boolean", nullable=true)
     */
    private $c3221;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3222", type="boolean", nullable=true)
     */
    private $c3222;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3223", type="boolean", nullable=true)
     */
    private $c3223;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3224", type="boolean", nullable=true)
     */
    private $c3224;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3225", type="boolean", nullable=true)
     */
    private $c3225;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3226", type="boolean", nullable=true)
     */
    private $c3226;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3227", type="boolean", nullable=true)
     */
    private $c3227;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3228", type="boolean", nullable=true)
     */
    private $c3228;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3229", type="boolean", nullable=true)
     */
    private $c3229;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3230", type="boolean", nullable=true)
     */
    private $c3230;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3231", type="boolean", nullable=true)
     */
    private $c3231;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3232", type="boolean", nullable=true)
     */
    private $c3232;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3310", type="boolean", nullable=true)
     */
    private $c3310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3311", type="boolean", nullable=true)
     */
    private $c3311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3312", type="boolean", nullable=true)
     */
    private $c3312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3313", type="boolean", nullable=true)
     */
    private $c3313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3314", type="boolean", nullable=true)
     */
    private $c3314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3315", type="boolean", nullable=true)
     */
    private $c3315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3316", type="boolean", nullable=true)
     */
    private $c3316;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3317", type="boolean", nullable=true)
     */
    private $c3317;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3318", type="boolean", nullable=true)
     */
    private $c3318;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3319", type="boolean", nullable=true)
     */
    private $c3319;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3320", type="boolean", nullable=true)
     */
    private $c3320;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3321", type="boolean", nullable=true)
     */
    private $c3321;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3322", type="boolean", nullable=true)
     */
    private $c3322;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3323", type="boolean", nullable=true)
     */
    private $c3323;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3324", type="boolean", nullable=true)
     */
    private $c3324;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3325", type="boolean", nullable=true)
     */
    private $c3325;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3326", type="boolean", nullable=true)
     */
    private $c3326;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3327", type="boolean", nullable=true)
     */
    private $c3327;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3328", type="boolean", nullable=true)
     */
    private $c3328;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3329", type="boolean", nullable=true)
     */
    private $c3329;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3330", type="boolean", nullable=true)
     */
    private $c3330;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3331", type="boolean", nullable=true)
     */
    private $c3331;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3332", type="boolean", nullable=true)
     */
    private $c3332;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3333", type="boolean", nullable=true)
     */
    private $c3333;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3410", type="boolean", nullable=true)
     */
    private $c3410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3411", type="boolean", nullable=true)
     */
    private $c3411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3412", type="boolean", nullable=true)
     */
    private $c3412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3413", type="boolean", nullable=true)
     */
    private $c3413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3414", type="boolean", nullable=true)
     */
    private $c3414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3415", type="boolean", nullable=true)
     */
    private $c3415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3416", type="boolean", nullable=true)
     */
    private $c3416;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3417", type="boolean", nullable=true)
     */
    private $c3417;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3418", type="boolean", nullable=true)
     */
    private $c3418;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3419", type="boolean", nullable=true)
     */
    private $c3419;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3420", type="boolean", nullable=true)
     */
    private $c3420;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3421", type="boolean", nullable=true)
     */
    private $c3421;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3422", type="boolean", nullable=true)
     */
    private $c3422;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3423", type="boolean", nullable=true)
     */
    private $c3423;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3424", type="boolean", nullable=true)
     */
    private $c3424;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3425", type="boolean", nullable=true)
     */
    private $c3425;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3426", type="boolean", nullable=true)
     */
    private $c3426;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3427", type="boolean", nullable=true)
     */
    private $c3427;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3428", type="boolean", nullable=true)
     */
    private $c3428;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3429", type="boolean", nullable=true)
     */
    private $c3429;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3430", type="boolean", nullable=true)
     */
    private $c3430;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3431", type="boolean", nullable=true)
     */
    private $c3431;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3432", type="boolean", nullable=true)
     */
    private $c3432;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3510", type="boolean", nullable=true)
     */
    private $c3510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3511", type="boolean", nullable=true)
     */
    private $c3511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3512", type="boolean", nullable=true)
     */
    private $c3512;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3513", type="boolean", nullable=true)
     */
    private $c3513;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3514", type="boolean", nullable=true)
     */
    private $c3514;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3515", type="boolean", nullable=true)
     */
    private $c3515;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3516", type="boolean", nullable=true)
     */
    private $c3516;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3517", type="boolean", nullable=true)
     */
    private $c3517;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3518", type="boolean", nullable=true)
     */
    private $c3518;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3519", type="boolean", nullable=true)
     */
    private $c3519;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3520", type="boolean", nullable=true)
     */
    private $c3520;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3521", type="boolean", nullable=true)
     */
    private $c3521;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3522", type="boolean", nullable=true)
     */
    private $c3522;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3523", type="boolean", nullable=true)
     */
    private $c3523;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3524", type="boolean", nullable=true)
     */
    private $c3524;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3525", type="boolean", nullable=true)
     */
    private $c3525;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3526", type="boolean", nullable=true)
     */
    private $c3526;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3527", type="boolean", nullable=true)
     */
    private $c3527;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3528", type="boolean", nullable=true)
     */
    private $c3528;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3529", type="boolean", nullable=true)
     */
    private $c3529;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3530", type="boolean", nullable=true)
     */
    private $c3530;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3531", type="boolean", nullable=true)
     */
    private $c3531;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3532", type="boolean", nullable=true)
     */
    private $c3532;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3610", type="boolean", nullable=true)
     */
    private $c3610;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3611", type="boolean", nullable=true)
     */
    private $c3611;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3612", type="boolean", nullable=true)
     */
    private $c3612;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3613", type="boolean", nullable=true)
     */
    private $c3613;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3614", type="boolean", nullable=true)
     */
    private $c3614;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3615", type="boolean", nullable=true)
     */
    private $c3615;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3616", type="boolean", nullable=true)
     */
    private $c3616;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3617", type="boolean", nullable=true)
     */
    private $c3617;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3618", type="boolean", nullable=true)
     */
    private $c3618;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3619", type="boolean", nullable=true)
     */
    private $c3619;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3620", type="boolean", nullable=true)
     */
    private $c3620;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3621", type="boolean", nullable=true)
     */
    private $c3621;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3710", type="boolean", nullable=true)
     */
    private $c3710;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3711", type="boolean", nullable=true)
     */
    private $c3711;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3712", type="boolean", nullable=true)
     */
    private $c3712;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3713", type="boolean", nullable=true)
     */
    private $c3713;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3714", type="boolean", nullable=true)
     */
    private $c3714;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3715", type="boolean", nullable=true)
     */
    private $c3715;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3716", type="boolean", nullable=true)
     */
    private $c3716;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3717", type="boolean", nullable=true)
     */
    private $c3717;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3718", type="boolean", nullable=true)
     */
    private $c3718;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3719", type="boolean", nullable=true)
     */
    private $c3719;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3810", type="boolean", nullable=true)
     */
    private $c3810;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3811", type="boolean", nullable=true)
     */
    private $c3811;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3812", type="boolean", nullable=true)
     */
    private $c3812;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3813", type="boolean", nullable=true)
     */
    private $c3813;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3814", type="boolean", nullable=true)
     */
    private $c3814;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3815", type="boolean", nullable=true)
     */
    private $c3815;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3816", type="boolean", nullable=true)
     */
    private $c3816;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3817", type="boolean", nullable=true)
     */
    private $c3817;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3818", type="boolean", nullable=true)
     */
    private $c3818;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3819", type="boolean", nullable=true)
     */
    private $c3819;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3820", type="boolean", nullable=true)
     */
    private $c3820;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3821", type="boolean", nullable=true)
     */
    private $c3821;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3822", type="boolean", nullable=true)
     */
    private $c3822;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3823", type="boolean", nullable=true)
     */
    private $c3823;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3824", type="boolean", nullable=true)
     */
    private $c3824;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3825", type="boolean", nullable=true)
     */
    private $c3825;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3826", type="boolean", nullable=true)
     */
    private $c3826;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3827", type="boolean", nullable=true)
     */
    private $c3827;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3828", type="boolean", nullable=true)
     */
    private $c3828;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3829", type="boolean", nullable=true)
     */
    private $c3829;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3830", type="boolean", nullable=true)
     */
    private $c3830;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3831", type="boolean", nullable=true)
     */
    private $c3831;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3910", type="boolean", nullable=true)
     */
    private $c3910;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3911", type="boolean", nullable=true)
     */
    private $c3911;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3912", type="boolean", nullable=true)
     */
    private $c3912;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3913", type="boolean", nullable=true)
     */
    private $c3913;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3914", type="boolean", nullable=true)
     */
    private $c3914;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3915", type="boolean", nullable=true)
     */
    private $c3915;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3916", type="boolean", nullable=true)
     */
    private $c3916;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3917", type="boolean", nullable=true)
     */
    private $c3917;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3918", type="boolean", nullable=true)
     */
    private $c3918;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3919", type="boolean", nullable=true)
     */
    private $c3919;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3920", type="boolean", nullable=true)
     */
    private $c3920;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3921", type="boolean", nullable=true)
     */
    private $c3921;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3922", type="boolean", nullable=true)
     */
    private $c3922;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3923", type="boolean", nullable=true)
     */
    private $c3923;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3924", type="boolean", nullable=true)
     */
    private $c3924;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3925", type="boolean", nullable=true)
     */
    private $c3925;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3926", type="boolean", nullable=true)
     */
    private $c3926;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3927", type="boolean", nullable=true)
     */
    private $c3927;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3928", type="boolean", nullable=true)
     */
    private $c3928;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3929", type="boolean", nullable=true)
     */
    private $c3929;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3930", type="boolean", nullable=true)
     */
    private $c3930;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C3931", type="boolean", nullable=true)
     */
    private $c3931;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30310", type="boolean", nullable=true)
     */
    private $c30310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30311", type="boolean", nullable=true)
     */
    private $c30311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30312", type="boolean", nullable=true)
     */
    private $c30312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30313", type="boolean", nullable=true)
     */
    private $c30313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30314", type="boolean", nullable=true)
     */
    private $c30314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30315", type="boolean", nullable=true)
     */
    private $c30315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30316", type="boolean", nullable=true)
     */
    private $c30316;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30317", type="boolean", nullable=true)
     */
    private $c30317;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30318", type="boolean", nullable=true)
     */
    private $c30318;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30319", type="boolean", nullable=true)
     */
    private $c30319;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30320", type="boolean", nullable=true)
     */
    private $c30320;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30321", type="boolean", nullable=true)
     */
    private $c30321;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30322", type="boolean", nullable=true)
     */
    private $c30322;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30323", type="boolean", nullable=true)
     */
    private $c30323;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30324", type="boolean", nullable=true)
     */
    private $c30324;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30325", type="boolean", nullable=true)
     */
    private $c30325;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30326", type="boolean", nullable=true)
     */
    private $c30326;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30327", type="boolean", nullable=true)
     */
    private $c30327;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30328", type="boolean", nullable=true)
     */
    private $c30328;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30329", type="boolean", nullable=true)
     */
    private $c30329;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30330", type="boolean", nullable=true)
     */
    private $c30330;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30331", type="boolean", nullable=true)
     */
    private $c30331;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30332", type="boolean", nullable=true)
     */
    private $c30332;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30333", type="boolean", nullable=true)
     */
    private $c30333;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30410", type="boolean", nullable=true)
     */
    private $c30410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30411", type="boolean", nullable=true)
     */
    private $c30411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30412", type="boolean", nullable=true)
     */
    private $c30412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30413", type="boolean", nullable=true)
     */
    private $c30413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30414", type="boolean", nullable=true)
     */
    private $c30414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30415", type="boolean", nullable=true)
     */
    private $c30415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30416", type="boolean", nullable=true)
     */
    private $c30416;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30417", type="boolean", nullable=true)
     */
    private $c30417;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30418", type="boolean", nullable=true)
     */
    private $c30418;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30419", type="boolean", nullable=true)
     */
    private $c30419;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30420", type="boolean", nullable=true)
     */
    private $c30420;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30421", type="boolean", nullable=true)
     */
    private $c30421;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30422", type="boolean", nullable=true)
     */
    private $c30422;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30423", type="boolean", nullable=true)
     */
    private $c30423;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30424", type="boolean", nullable=true)
     */
    private $c30424;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30425", type="boolean", nullable=true)
     */
    private $c30425;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30426", type="boolean", nullable=true)
     */
    private $c30426;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30427", type="boolean", nullable=true)
     */
    private $c30427;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30428", type="boolean", nullable=true)
     */
    private $c30428;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30429", type="boolean", nullable=true)
     */
    private $c30429;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30430", type="boolean", nullable=true)
     */
    private $c30430;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30431", type="boolean", nullable=true)
     */
    private $c30431;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30432", type="boolean", nullable=true)
     */
    private $c30432;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30510", type="boolean", nullable=true)
     */
    private $c30510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30511", type="boolean", nullable=true)
     */
    private $c30511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30610", type="boolean", nullable=true)
     */
    private $c30610;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30611", type="boolean", nullable=true)
     */
    private $c30611;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30612", type="boolean", nullable=true)
     */
    private $c30612;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30613", type="boolean", nullable=true)
     */
    private $c30613;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30710", type="boolean", nullable=true)
     */
    private $c30710;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30711", type="boolean", nullable=true)
     */
    private $c30711;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30712", type="boolean", nullable=true)
     */
    private $c30712;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C30713", type="boolean", nullable=true)
     */
    private $c30713;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4000", type="boolean", nullable=true)
     */
    private $c4000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4001", type="boolean", nullable=true)
     */
    private $c4001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4010", type="boolean", nullable=true)
     */
    private $c4010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4011", type="boolean", nullable=true)
     */
    private $c4011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4012", type="boolean", nullable=true)
     */
    private $c4012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4013", type="boolean", nullable=true)
     */
    private $c4013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4014", type="boolean", nullable=true)
     */
    private $c4014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4015", type="boolean", nullable=true)
     */
    private $c4015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4016", type="boolean", nullable=true)
     */
    private $c4016;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4017", type="boolean", nullable=true)
     */
    private $c4017;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4018", type="boolean", nullable=true)
     */
    private $c4018;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4019", type="boolean", nullable=true)
     */
    private $c4019;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4020", type="boolean", nullable=true)
     */
    private $c4020;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4021", type="boolean", nullable=true)
     */
    private $c4021;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4022", type="boolean", nullable=true)
     */
    private $c4022;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4023", type="boolean", nullable=true)
     */
    private $c4023;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4024", type="boolean", nullable=true)
     */
    private $c4024;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4025", type="boolean", nullable=true)
     */
    private $c4025;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4026", type="boolean", nullable=true)
     */
    private $c4026;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4027", type="boolean", nullable=true)
     */
    private $c4027;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4028", type="boolean", nullable=true)
     */
    private $c4028;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4110", type="boolean", nullable=true)
     */
    private $c4110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4111", type="boolean", nullable=true)
     */
    private $c4111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4112", type="boolean", nullable=true)
     */
    private $c4112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4113", type="boolean", nullable=true)
     */
    private $c4113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4114", type="boolean", nullable=true)
     */
    private $c4114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4115", type="boolean", nullable=true)
     */
    private $c4115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4116", type="boolean", nullable=true)
     */
    private $c4116;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4117", type="boolean", nullable=true)
     */
    private $c4117;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4118", type="boolean", nullable=true)
     */
    private $c4118;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4119", type="boolean", nullable=true)
     */
    private $c4119;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4120", type="boolean", nullable=true)
     */
    private $c4120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4121", type="boolean", nullable=true)
     */
    private $c4121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4122", type="boolean", nullable=true)
     */
    private $c4122;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4123", type="boolean", nullable=true)
     */
    private $c4123;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4124", type="boolean", nullable=true)
     */
    private $c4124;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4125", type="boolean", nullable=true)
     */
    private $c4125;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4126", type="boolean", nullable=true)
     */
    private $c4126;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4127", type="boolean", nullable=true)
     */
    private $c4127;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4128", type="boolean", nullable=true)
     */
    private $c4128;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4210", type="boolean", nullable=true)
     */
    private $c4210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4211", type="boolean", nullable=true)
     */
    private $c4211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4212", type="boolean", nullable=true)
     */
    private $c4212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4213", type="boolean", nullable=true)
     */
    private $c4213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4214", type="boolean", nullable=true)
     */
    private $c4214;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4215", type="boolean", nullable=true)
     */
    private $c4215;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4216", type="boolean", nullable=true)
     */
    private $c4216;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4217", type="boolean", nullable=true)
     */
    private $c4217;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4218", type="boolean", nullable=true)
     */
    private $c4218;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4219", type="boolean", nullable=true)
     */
    private $c4219;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4220", type="boolean", nullable=true)
     */
    private $c4220;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4221", type="boolean", nullable=true)
     */
    private $c4221;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4222", type="boolean", nullable=true)
     */
    private $c4222;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4223", type="boolean", nullable=true)
     */
    private $c4223;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4224", type="boolean", nullable=true)
     */
    private $c4224;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4225", type="boolean", nullable=true)
     */
    private $c4225;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4226", type="boolean", nullable=true)
     */
    private $c4226;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4227", type="boolean", nullable=true)
     */
    private $c4227;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4228", type="boolean", nullable=true)
     */
    private $c4228;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4310", type="boolean", nullable=true)
     */
    private $c4310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4311", type="boolean", nullable=true)
     */
    private $c4311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4312", type="boolean", nullable=true)
     */
    private $c4312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4313", type="boolean", nullable=true)
     */
    private $c4313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4314", type="boolean", nullable=true)
     */
    private $c4314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4315", type="boolean", nullable=true)
     */
    private $c4315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4316", type="boolean", nullable=true)
     */
    private $c4316;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4317", type="boolean", nullable=true)
     */
    private $c4317;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4318", type="boolean", nullable=true)
     */
    private $c4318;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4319", type="boolean", nullable=true)
     */
    private $c4319;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4320", type="boolean", nullable=true)
     */
    private $c4320;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4321", type="boolean", nullable=true)
     */
    private $c4321;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4322", type="boolean", nullable=true)
     */
    private $c4322;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4323", type="boolean", nullable=true)
     */
    private $c4323;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4324", type="boolean", nullable=true)
     */
    private $c4324;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4325", type="boolean", nullable=true)
     */
    private $c4325;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4326", type="boolean", nullable=true)
     */
    private $c4326;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4327", type="boolean", nullable=true)
     */
    private $c4327;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4328", type="boolean", nullable=true)
     */
    private $c4328;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4329", type="boolean", nullable=true)
     */
    private $c4329;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4410", type="boolean", nullable=true)
     */
    private $c4410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4411", type="boolean", nullable=true)
     */
    private $c4411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4412", type="boolean", nullable=true)
     */
    private $c4412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4413", type="boolean", nullable=true)
     */
    private $c4413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4414", type="boolean", nullable=true)
     */
    private $c4414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4415", type="boolean", nullable=true)
     */
    private $c4415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4416", type="boolean", nullable=true)
     */
    private $c4416;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4417", type="boolean", nullable=true)
     */
    private $c4417;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4418", type="boolean", nullable=true)
     */
    private $c4418;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4419", type="boolean", nullable=true)
     */
    private $c4419;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4420", type="boolean", nullable=true)
     */
    private $c4420;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4421", type="boolean", nullable=true)
     */
    private $c4421;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4422", type="boolean", nullable=true)
     */
    private $c4422;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4423", type="boolean", nullable=true)
     */
    private $c4423;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4424", type="boolean", nullable=true)
     */
    private $c4424;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4425", type="boolean", nullable=true)
     */
    private $c4425;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4426", type="boolean", nullable=true)
     */
    private $c4426;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4427", type="boolean", nullable=true)
     */
    private $c4427;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4428", type="boolean", nullable=true)
     */
    private $c4428;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4510", type="boolean", nullable=true)
     */
    private $c4510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4511", type="boolean", nullable=true)
     */
    private $c4511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4512", type="boolean", nullable=true)
     */
    private $c4512;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4513", type="boolean", nullable=true)
     */
    private $c4513;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4514", type="boolean", nullable=true)
     */
    private $c4514;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4515", type="boolean", nullable=true)
     */
    private $c4515;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4516", type="boolean", nullable=true)
     */
    private $c4516;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4517", type="boolean", nullable=true)
     */
    private $c4517;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4518", type="boolean", nullable=true)
     */
    private $c4518;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4519", type="boolean", nullable=true)
     */
    private $c4519;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4520", type="boolean", nullable=true)
     */
    private $c4520;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4521", type="boolean", nullable=true)
     */
    private $c4521;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4522", type="boolean", nullable=true)
     */
    private $c4522;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4523", type="boolean", nullable=true)
     */
    private $c4523;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4524", type="boolean", nullable=true)
     */
    private $c4524;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4525", type="boolean", nullable=true)
     */
    private $c4525;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4526", type="boolean", nullable=true)
     */
    private $c4526;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4527", type="boolean", nullable=true)
     */
    private $c4527;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4528", type="boolean", nullable=true)
     */
    private $c4528;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4600", type="boolean", nullable=true)
     */
    private $c4600;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4601", type="boolean", nullable=true)
     */
    private $c4601;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4700", type="boolean", nullable=true)
     */
    private $c4700;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4701", type="boolean", nullable=true)
     */
    private $c4701;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4800", type="boolean", nullable=true)
     */
    private $c4800;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4801", type="boolean", nullable=true)
     */
    private $c4801;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4802", type="boolean", nullable=true)
     */
    private $c4802;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4803", type="boolean", nullable=true)
     */
    private $c4803;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4804", type="boolean", nullable=true)
     */
    private $c4804;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4805", type="boolean", nullable=true)
     */
    private $c4805;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C4806", type="boolean", nullable=true)
     */
    private $c4806;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5000", type="boolean", nullable=true)
     */
    private $c5000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5001", type="boolean", nullable=true)
     */
    private $c5001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5010", type="boolean", nullable=true)
     */
    private $c5010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5011", type="boolean", nullable=true)
     */
    private $c5011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5012", type="boolean", nullable=true)
     */
    private $c5012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5013", type="boolean", nullable=true)
     */
    private $c5013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5014", type="boolean", nullable=true)
     */
    private $c5014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5015", type="boolean", nullable=true)
     */
    private $c5015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5016", type="boolean", nullable=true)
     */
    private $c5016;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5017", type="boolean", nullable=true)
     */
    private $c5017;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5018", type="boolean", nullable=true)
     */
    private $c5018;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5019", type="boolean", nullable=true)
     */
    private $c5019;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5020", type="boolean", nullable=true)
     */
    private $c5020;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5021", type="boolean", nullable=true)
     */
    private $c5021;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5110", type="boolean", nullable=true)
     */
    private $c5110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5111", type="boolean", nullable=true)
     */
    private $c5111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5112", type="boolean", nullable=true)
     */
    private $c5112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5113", type="boolean", nullable=true)
     */
    private $c5113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5114", type="boolean", nullable=true)
     */
    private $c5114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5115", type="boolean", nullable=true)
     */
    private $c5115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5116", type="boolean", nullable=true)
     */
    private $c5116;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5117", type="boolean", nullable=true)
     */
    private $c5117;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5118", type="boolean", nullable=true)
     */
    private $c5118;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5119", type="boolean", nullable=true)
     */
    private $c5119;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5120", type="boolean", nullable=true)
     */
    private $c5120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5121", type="boolean", nullable=true)
     */
    private $c5121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5210", type="boolean", nullable=true)
     */
    private $c5210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5211", type="boolean", nullable=true)
     */
    private $c5211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5212", type="boolean", nullable=true)
     */
    private $c5212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5213", type="boolean", nullable=true)
     */
    private $c5213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5214", type="boolean", nullable=true)
     */
    private $c5214;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5215", type="boolean", nullable=true)
     */
    private $c5215;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5216", type="boolean", nullable=true)
     */
    private $c5216;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5217", type="boolean", nullable=true)
     */
    private $c5217;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5218", type="boolean", nullable=true)
     */
    private $c5218;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5219", type="boolean", nullable=true)
     */
    private $c5219;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5220", type="boolean", nullable=true)
     */
    private $c5220;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5221", type="boolean", nullable=true)
     */
    private $c5221;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5310", type="boolean", nullable=true)
     */
    private $c5310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5311", type="boolean", nullable=true)
     */
    private $c5311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5312", type="boolean", nullable=true)
     */
    private $c5312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5313", type="boolean", nullable=true)
     */
    private $c5313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5314", type="boolean", nullable=true)
     */
    private $c5314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5315", type="boolean", nullable=true)
     */
    private $c5315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5316", type="boolean", nullable=true)
     */
    private $c5316;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5317", type="boolean", nullable=true)
     */
    private $c5317;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5410", type="boolean", nullable=true)
     */
    private $c5410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5411", type="boolean", nullable=true)
     */
    private $c5411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5412", type="boolean", nullable=true)
     */
    private $c5412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5413", type="boolean", nullable=true)
     */
    private $c5413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5414", type="boolean", nullable=true)
     */
    private $c5414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5415", type="boolean", nullable=true)
     */
    private $c5415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6000", type="boolean", nullable=true)
     */
    private $c6000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6010", type="boolean", nullable=true)
     */
    private $c6010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6011", type="boolean", nullable=true)
     */
    private $c6011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6012", type="boolean", nullable=true)
     */
    private $c6012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6050", type="boolean", nullable=true)
     */
    private $c6050;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6051", type="boolean", nullable=true)
     */
    private $c6051;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6052", type="boolean", nullable=true)
     */
    private $c6052;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6110", type="boolean", nullable=true)
     */
    private $c6110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6111", type="boolean", nullable=true)
     */
    private $c6111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6112", type="boolean", nullable=true)
     */
    private $c6112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6113", type="boolean", nullable=true)
     */
    private $c6113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6114", type="boolean", nullable=true)
     */
    private $c6114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6115", type="boolean", nullable=true)
     */
    private $c6115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6116", type="boolean", nullable=true)
     */
    private $c6116;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6117", type="boolean", nullable=true)
     */
    private $c6117;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6118", type="boolean", nullable=true)
     */
    private $c6118;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6119", type="boolean", nullable=true)
     */
    private $c6119;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6120", type="boolean", nullable=true)
     */
    private $c6120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6121", type="boolean", nullable=true)
     */
    private $c6121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6122", type="boolean", nullable=true)
     */
    private $c6122;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6123", type="boolean", nullable=true)
     */
    private $c6123;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6124", type="boolean", nullable=true)
     */
    private $c6124;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6125", type="boolean", nullable=true)
     */
    private $c6125;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6126", type="boolean", nullable=true)
     */
    private $c6126;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6127", type="boolean", nullable=true)
     */
    private $c6127;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6210", type="boolean", nullable=true)
     */
    private $c6210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6211", type="boolean", nullable=true)
     */
    private $c6211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6212", type="boolean", nullable=true)
     */
    private $c6212;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6213", type="boolean", nullable=true)
     */
    private $c6213;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6214", type="boolean", nullable=true)
     */
    private $c6214;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6215", type="boolean", nullable=true)
     */
    private $c6215;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6216", type="boolean", nullable=true)
     */
    private $c6216;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6217", type="boolean", nullable=true)
     */
    private $c6217;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6310", type="boolean", nullable=true)
     */
    private $c6310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6311", type="boolean", nullable=true)
     */
    private $c6311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6312", type="boolean", nullable=true)
     */
    private $c6312;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6313", type="boolean", nullable=true)
     */
    private $c6313;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6314", type="boolean", nullable=true)
     */
    private $c6314;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6315", type="boolean", nullable=true)
     */
    private $c6315;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6316", type="boolean", nullable=true)
     */
    private $c6316;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6317", type="boolean", nullable=true)
     */
    private $c6317;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6318", type="boolean", nullable=true)
     */
    private $c6318;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6319", type="boolean", nullable=true)
     */
    private $c6319;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6320", type="boolean", nullable=true)
     */
    private $c6320;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6321", type="boolean", nullable=true)
     */
    private $c6321;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6322", type="boolean", nullable=true)
     */
    private $c6322;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6410", type="boolean", nullable=true)
     */
    private $c6410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6411", type="boolean", nullable=true)
     */
    private $c6411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6412", type="boolean", nullable=true)
     */
    private $c6412;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6413", type="boolean", nullable=true)
     */
    private $c6413;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6414", type="boolean", nullable=true)
     */
    private $c6414;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6415", type="boolean", nullable=true)
     */
    private $c6415;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6416", type="boolean", nullable=true)
     */
    private $c6416;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6417", type="boolean", nullable=true)
     */
    private $c6417;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6418", type="boolean", nullable=true)
     */
    private $c6418;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6419", type="boolean", nullable=true)
     */
    private $c6419;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6420", type="boolean", nullable=true)
     */
    private $c6420;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6421", type="boolean", nullable=true)
     */
    private $c6421;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6422", type="boolean", nullable=true)
     */
    private $c6422;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6510", type="boolean", nullable=true)
     */
    private $c6510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6511", type="boolean", nullable=true)
     */
    private $c6511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6512", type="boolean", nullable=true)
     */
    private $c6512;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6513", type="boolean", nullable=true)
     */
    private $c6513;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6514", type="boolean", nullable=true)
     */
    private $c6514;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6515", type="boolean", nullable=true)
     */
    private $c6515;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6516", type="boolean", nullable=true)
     */
    private $c6516;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6517", type="boolean", nullable=true)
     */
    private $c6517;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6518", type="boolean", nullable=true)
     */
    private $c6518;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6519", type="boolean", nullable=true)
     */
    private $c6519;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6520", type="boolean", nullable=true)
     */
    private $c6520;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6521", type="boolean", nullable=true)
     */
    private $c6521;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6522", type="boolean", nullable=true)
     */
    private $c6522;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6610", type="boolean", nullable=true)
     */
    private $c6610;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C6611", type="boolean", nullable=true)
     */
    private $c6611;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7000", type="boolean", nullable=true)
     */
    private $c7000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7010", type="boolean", nullable=true)
     */
    private $c7010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7011", type="boolean", nullable=true)
     */
    private $c7011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7012", type="boolean", nullable=true)
     */
    private $c7012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7013", type="boolean", nullable=true)
     */
    private $c7013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7014", type="boolean", nullable=true)
     */
    private $c7014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7015", type="boolean", nullable=true)
     */
    private $c7015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7016", type="boolean", nullable=true)
     */
    private $c7016;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7017", type="boolean", nullable=true)
     */
    private $c7017;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7020", type="boolean", nullable=true)
     */
    private $c7020;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7021", type="boolean", nullable=true)
     */
    private $c7021;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7022", type="boolean", nullable=true)
     */
    private $c7022;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7023", type="boolean", nullable=true)
     */
    private $c7023;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7030", type="boolean", nullable=true)
     */
    private $c7030;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7031", type="boolean", nullable=true)
     */
    private $c7031;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7032", type="boolean", nullable=true)
     */
    private $c7032;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7033", type="boolean", nullable=true)
     */
    private $c7033;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7034", type="boolean", nullable=true)
     */
    private $c7034;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7035", type="boolean", nullable=true)
     */
    private $c7035;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7036", type="boolean", nullable=true)
     */
    private $c7036;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7040", type="boolean", nullable=true)
     */
    private $c7040;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7041", type="boolean", nullable=true)
     */
    private $c7041;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7050", type="boolean", nullable=true)
     */
    private $c7050;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7051", type="boolean", nullable=true)
     */
    private $c7051;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7060", type="boolean", nullable=true)
     */
    private $c7060;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7061", type="boolean", nullable=true)
     */
    private $c7061;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7062", type="boolean", nullable=true)
     */
    private $c7062;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7063", type="boolean", nullable=true)
     */
    private $c7063;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7064", type="boolean", nullable=true)
     */
    private $c7064;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7065", type="boolean", nullable=true)
     */
    private $c7065;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7066", type="boolean", nullable=true)
     */
    private $c7066;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7067", type="boolean", nullable=true)
     */
    private $c7067;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7068", type="boolean", nullable=true)
     */
    private $c7068;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7069", type="boolean", nullable=true)
     */
    private $c7069;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7070", type="boolean", nullable=true)
     */
    private $c7070;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C7071", type="boolean", nullable=true)
     */
    private $c7071;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8000", type="boolean", nullable=true)
     */
    private $c8000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8001", type="boolean", nullable=true)
     */
    private $c8001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8002", type="boolean", nullable=true)
     */
    private $c8002;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8003", type="boolean", nullable=true)
     */
    private $c8003;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8004", type="boolean", nullable=true)
     */
    private $c8004;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8005", type="boolean", nullable=true)
     */
    private $c8005;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8006", type="boolean", nullable=true)
     */
    private $c8006;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8007", type="boolean", nullable=true)
     */
    private $c8007;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8101", type="boolean", nullable=true)
     */
    private $c8101;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8102", type="boolean", nullable=true)
     */
    private $c8102;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8103", type="boolean", nullable=true)
     */
    private $c8103;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8104", type="boolean", nullable=true)
     */
    private $c8104;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8105", type="boolean", nullable=true)
     */
    private $c8105;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8106", type="boolean", nullable=true)
     */
    private $c8106;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8107", type="boolean", nullable=true)
     */
    private $c8107;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8108", type="boolean", nullable=true)
     */
    private $c8108;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8109", type="boolean", nullable=true)
     */
    private $c8109;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8110", type="boolean", nullable=true)
     */
    private $c8110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8111", type="boolean", nullable=true)
     */
    private $c8111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8112", type="boolean", nullable=true)
     */
    private $c8112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8113", type="boolean", nullable=true)
     */
    private $c8113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8114", type="boolean", nullable=true)
     */
    private $c8114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8115", type="boolean", nullable=true)
     */
    private $c8115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8116", type="boolean", nullable=true)
     */
    private $c8116;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8117", type="boolean", nullable=true)
     */
    private $c8117;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8118", type="boolean", nullable=true)
     */
    private $c8118;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8119", type="boolean", nullable=true)
     */
    private $c8119;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8120", type="boolean", nullable=true)
     */
    private $c8120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8121", type="boolean", nullable=true)
     */
    private $c8121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8122", type="boolean", nullable=true)
     */
    private $c8122;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8123", type="boolean", nullable=true)
     */
    private $c8123;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8124", type="boolean", nullable=true)
     */
    private $c8124;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C8125", type="boolean", nullable=true)
     */
    private $c8125;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMarq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true)
     */
    private $cbcreateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     */
    private $cbmodification;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10000", type="boolean", nullable=true)
     */
    private $c10000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10001", type="boolean", nullable=true)
     */
    private $c10001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10002", type="boolean", nullable=true)
     */
    private $c10002;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10003", type="boolean", nullable=true)
     */
    private $c10003;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10004", type="boolean", nullable=true)
     */
    private $c10004;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10005", type="boolean", nullable=true)
     */
    private $c10005;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10006", type="boolean", nullable=true)
     */
    private $c10006;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10007", type="boolean", nullable=true)
     */
    private $c10007;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10008", type="boolean", nullable=true)
     */
    private $c10008;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10009", type="boolean", nullable=true)
     */
    private $c10009;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10010", type="boolean", nullable=true)
     */
    private $c10010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10011", type="boolean", nullable=true)
     */
    private $c10011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10012", type="boolean", nullable=true)
     */
    private $c10012;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10013", type="boolean", nullable=true)
     */
    private $c10013;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10014", type="boolean", nullable=true)
     */
    private $c10014;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10015", type="boolean", nullable=true)
     */
    private $c10015;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10016", type="boolean", nullable=true)
     */
    private $c10016;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10017", type="boolean", nullable=true)
     */
    private $c10017;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10018", type="boolean", nullable=true)
     */
    private $c10018;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10019", type="boolean", nullable=true)
     */
    private $c10019;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10020", type="boolean", nullable=true)
     */
    private $c10020;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10021", type="boolean", nullable=true)
     */
    private $c10021;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10022", type="boolean", nullable=true)
     */
    private $c10022;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10023", type="boolean", nullable=true)
     */
    private $c10023;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10024", type="boolean", nullable=true)
     */
    private $c10024;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10025", type="boolean", nullable=true)
     */
    private $c10025;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10026", type="boolean", nullable=true)
     */
    private $c10026;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10027", type="boolean", nullable=true)
     */
    private $c10027;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10028", type="boolean", nullable=true)
     */
    private $c10028;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10029", type="boolean", nullable=true)
     */
    private $c10029;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10030", type="boolean", nullable=true)
     */
    private $c10030;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10031", type="boolean", nullable=true)
     */
    private $c10031;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10032", type="boolean", nullable=true)
     */
    private $c10032;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10033", type="boolean", nullable=true)
     */
    private $c10033;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10034", type="boolean", nullable=true)
     */
    private $c10034;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10035", type="boolean", nullable=true)
     */
    private $c10035;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10036", type="boolean", nullable=true)
     */
    private $c10036;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10037", type="boolean", nullable=true)
     */
    private $c10037;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10038", type="boolean", nullable=true)
     */
    private $c10038;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10039", type="boolean", nullable=true)
     */
    private $c10039;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10040", type="boolean", nullable=true)
     */
    private $c10040;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10041", type="boolean", nullable=true)
     */
    private $c10041;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10042", type="boolean", nullable=true)
     */
    private $c10042;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10043", type="boolean", nullable=true)
     */
    private $c10043;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10044", type="boolean", nullable=true)
     */
    private $c10044;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10045", type="boolean", nullable=true)
     */
    private $c10045;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10046", type="boolean", nullable=true)
     */
    private $c10046;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10047", type="boolean", nullable=true)
     */
    private $c10047;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10048", type="boolean", nullable=true)
     */
    private $c10048;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10049", type="boolean", nullable=true)
     */
    private $c10049;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10050", type="boolean", nullable=true)
     */
    private $c10050;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10051", type="boolean", nullable=true)
     */
    private $c10051;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10052", type="boolean", nullable=true)
     */
    private $c10052;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10053", type="boolean", nullable=true)
     */
    private $c10053;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10054", type="boolean", nullable=true)
     */
    private $c10054;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10055", type="boolean", nullable=true)
     */
    private $c10055;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10056", type="boolean", nullable=true)
     */
    private $c10056;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10057", type="boolean", nullable=true)
     */
    private $c10057;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10058", type="boolean", nullable=true)
     */
    private $c10058;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10059", type="boolean", nullable=true)
     */
    private $c10059;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10060", type="boolean", nullable=true)
     */
    private $c10060;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10061", type="boolean", nullable=true)
     */
    private $c10061;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10062", type="boolean", nullable=true)
     */
    private $c10062;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10063", type="boolean", nullable=true)
     */
    private $c10063;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10064", type="boolean", nullable=true)
     */
    private $c10064;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10065", type="boolean", nullable=true)
     */
    private $c10065;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10066", type="boolean", nullable=true)
     */
    private $c10066;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10067", type="boolean", nullable=true)
     */
    private $c10067;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10068", type="boolean", nullable=true)
     */
    private $c10068;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10069", type="boolean", nullable=true)
     */
    private $c10069;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10070", type="boolean", nullable=true)
     */
    private $c10070;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10071", type="boolean", nullable=true)
     */
    private $c10071;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10072", type="boolean", nullable=true)
     */
    private $c10072;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10073", type="boolean", nullable=true)
     */
    private $c10073;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10074", type="boolean", nullable=true)
     */
    private $c10074;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10075", type="boolean", nullable=true)
     */
    private $c10075;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10076", type="boolean", nullable=true)
     */
    private $c10076;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10077", type="boolean", nullable=true)
     */
    private $c10077;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10078", type="boolean", nullable=true)
     */
    private $c10078;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10079", type="boolean", nullable=true)
     */
    private $c10079;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10080", type="boolean", nullable=true)
     */
    private $c10080;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10081", type="boolean", nullable=true)
     */
    private $c10081;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10082", type="boolean", nullable=true)
     */
    private $c10082;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10083", type="boolean", nullable=true)
     */
    private $c10083;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10084", type="boolean", nullable=true)
     */
    private $c10084;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10085", type="boolean", nullable=true)
     */
    private $c10085;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10086", type="boolean", nullable=true)
     */
    private $c10086;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10087", type="boolean", nullable=true)
     */
    private $c10087;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10088", type="boolean", nullable=true)
     */
    private $c10088;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10089", type="boolean", nullable=true)
     */
    private $c10089;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10090", type="boolean", nullable=true)
     */
    private $c10090;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10091", type="boolean", nullable=true)
     */
    private $c10091;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10092", type="boolean", nullable=true)
     */
    private $c10092;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10093", type="boolean", nullable=true)
     */
    private $c10093;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10094", type="boolean", nullable=true)
     */
    private $c10094;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10095", type="boolean", nullable=true)
     */
    private $c10095;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10096", type="boolean", nullable=true)
     */
    private $c10096;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10097", type="boolean", nullable=true)
     */
    private $c10097;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10098", type="boolean", nullable=true)
     */
    private $c10098;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10099", type="boolean", nullable=true)
     */
    private $c10099;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10100", type="boolean", nullable=true)
     */
    private $c10100;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10101", type="boolean", nullable=true)
     */
    private $c10101;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10102", type="boolean", nullable=true)
     */
    private $c10102;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10103", type="boolean", nullable=true)
     */
    private $c10103;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10104", type="boolean", nullable=true)
     */
    private $c10104;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10105", type="boolean", nullable=true)
     */
    private $c10105;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10106", type="boolean", nullable=true)
     */
    private $c10106;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10107", type="boolean", nullable=true)
     */
    private $c10107;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10108", type="boolean", nullable=true)
     */
    private $c10108;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10109", type="boolean", nullable=true)
     */
    private $c10109;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10110", type="boolean", nullable=true)
     */
    private $c10110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10111", type="boolean", nullable=true)
     */
    private $c10111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10112", type="boolean", nullable=true)
     */
    private $c10112;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10113", type="boolean", nullable=true)
     */
    private $c10113;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10114", type="boolean", nullable=true)
     */
    private $c10114;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10115", type="boolean", nullable=true)
     */
    private $c10115;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10116", type="boolean", nullable=true)
     */
    private $c10116;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10117", type="boolean", nullable=true)
     */
    private $c10117;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10118", type="boolean", nullable=true)
     */
    private $c10118;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10119", type="boolean", nullable=true)
     */
    private $c10119;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10120", type="boolean", nullable=true)
     */
    private $c10120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10121", type="boolean", nullable=true)
     */
    private $c10121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10122", type="boolean", nullable=true)
     */
    private $c10122;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10123", type="boolean", nullable=true)
     */
    private $c10123;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10124", type="boolean", nullable=true)
     */
    private $c10124;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10125", type="boolean", nullable=true)
     */
    private $c10125;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10126", type="boolean", nullable=true)
     */
    private $c10126;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10127", type="boolean", nullable=true)
     */
    private $c10127;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10128", type="boolean", nullable=true)
     */
    private $c10128;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10129", type="boolean", nullable=true)
     */
    private $c10129;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10130", type="boolean", nullable=true)
     */
    private $c10130;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10131", type="boolean", nullable=true)
     */
    private $c10131;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10132", type="boolean", nullable=true)
     */
    private $c10132;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10133", type="boolean", nullable=true)
     */
    private $c10133;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10134", type="boolean", nullable=true)
     */
    private $c10134;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10135", type="boolean", nullable=true)
     */
    private $c10135;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10136", type="boolean", nullable=true)
     */
    private $c10136;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10137", type="boolean", nullable=true)
     */
    private $c10137;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10138", type="boolean", nullable=true)
     */
    private $c10138;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10139", type="boolean", nullable=true)
     */
    private $c10139;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10140", type="boolean", nullable=true)
     */
    private $c10140;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10141", type="boolean", nullable=true)
     */
    private $c10141;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10142", type="boolean", nullable=true)
     */
    private $c10142;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10143", type="boolean", nullable=true)
     */
    private $c10143;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10144", type="boolean", nullable=true)
     */
    private $c10144;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10145", type="boolean", nullable=true)
     */
    private $c10145;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10146", type="boolean", nullable=true)
     */
    private $c10146;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10147", type="boolean", nullable=true)
     */
    private $c10147;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10148", type="boolean", nullable=true)
     */
    private $c10148;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10149", type="boolean", nullable=true)
     */
    private $c10149;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10150", type="boolean", nullable=true)
     */
    private $c10150;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10151", type="boolean", nullable=true)
     */
    private $c10151;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10152", type="boolean", nullable=true)
     */
    private $c10152;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10153", type="boolean", nullable=true)
     */
    private $c10153;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10154", type="boolean", nullable=true)
     */
    private $c10154;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10155", type="boolean", nullable=true)
     */
    private $c10155;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10156", type="boolean", nullable=true)
     */
    private $c10156;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10157", type="boolean", nullable=true)
     */
    private $c10157;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10158", type="boolean", nullable=true)
     */
    private $c10158;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10159", type="boolean", nullable=true)
     */
    private $c10159;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10160", type="boolean", nullable=true)
     */
    private $c10160;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10161", type="boolean", nullable=true)
     */
    private $c10161;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10162", type="boolean", nullable=true)
     */
    private $c10162;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10163", type="boolean", nullable=true)
     */
    private $c10163;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C10164", type="boolean", nullable=true)
     */
    private $c10164;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5002", type="boolean", nullable=true)
     */
    private $c5002;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5003", type="boolean", nullable=true)
     */
    private $c5003;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5004", type="boolean", nullable=true)
     */
    private $c5004;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5005", type="boolean", nullable=true)
     */
    private $c5005;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5006", type="boolean", nullable=true)
     */
    private $c5006;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5007", type="boolean", nullable=true)
     */
    private $c5007;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C5008", type="boolean", nullable=true)
     */
    private $c5008;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11000", type="boolean", nullable=true)
     */
    private $c11000;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11001", type="boolean", nullable=true)
     */
    private $c11001;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11002", type="boolean", nullable=true)
     */
    private $c11002;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11003", type="boolean", nullable=true)
     */
    private $c11003;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11010", type="boolean", nullable=true)
     */
    private $c11010;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11011", type="boolean", nullable=true)
     */
    private $c11011;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="C11012", type="boolean", nullable=true)
     */
    private $c11012;

    public function getProCode(): ?string
    {
        return $this->proCode;
    }

    public function setProCode(?string $proCode): self
    {
        $this->proCode = $proCode;

        return $this;
    }

    public function getC1000(): ?bool
    {
        return $this->c1000;
    }

    public function setC1000(?bool $c1000): self
    {
        $this->c1000 = $c1000;

        return $this;
    }

    public function getC1010(): ?bool
    {
        return $this->c1010;
    }

    public function setC1010(?bool $c1010): self
    {
        $this->c1010 = $c1010;

        return $this;
    }

    public function getC1011(): ?bool
    {
        return $this->c1011;
    }

    public function setC1011(?bool $c1011): self
    {
        $this->c1011 = $c1011;

        return $this;
    }

    public function getC1012(): ?bool
    {
        return $this->c1012;
    }

    public function setC1012(?bool $c1012): self
    {
        $this->c1012 = $c1012;

        return $this;
    }

    public function getC1013(): ?bool
    {
        return $this->c1013;
    }

    public function setC1013(?bool $c1013): self
    {
        $this->c1013 = $c1013;

        return $this;
    }

    public function getC1014(): ?bool
    {
        return $this->c1014;
    }

    public function setC1014(?bool $c1014): self
    {
        $this->c1014 = $c1014;

        return $this;
    }

    public function getC1015(): ?bool
    {
        return $this->c1015;
    }

    public function setC1015(?bool $c1015): self
    {
        $this->c1015 = $c1015;

        return $this;
    }

    public function getC1050(): ?bool
    {
        return $this->c1050;
    }

    public function setC1050(?bool $c1050): self
    {
        $this->c1050 = $c1050;

        return $this;
    }

    public function getC1051(): ?bool
    {
        return $this->c1051;
    }

    public function setC1051(?bool $c1051): self
    {
        $this->c1051 = $c1051;

        return $this;
    }

    public function getC1052(): ?bool
    {
        return $this->c1052;
    }

    public function setC1052(?bool $c1052): self
    {
        $this->c1052 = $c1052;

        return $this;
    }

    public function getC1053(): ?bool
    {
        return $this->c1053;
    }

    public function setC1053(?bool $c1053): self
    {
        $this->c1053 = $c1053;

        return $this;
    }

    public function getC1054(): ?bool
    {
        return $this->c1054;
    }

    public function setC1054(?bool $c1054): self
    {
        $this->c1054 = $c1054;

        return $this;
    }

    public function getC1055(): ?bool
    {
        return $this->c1055;
    }

    public function setC1055(?bool $c1055): self
    {
        $this->c1055 = $c1055;

        return $this;
    }

    public function getC1110(): ?bool
    {
        return $this->c1110;
    }

    public function setC1110(?bool $c1110): self
    {
        $this->c1110 = $c1110;

        return $this;
    }

    public function getC1111(): ?bool
    {
        return $this->c1111;
    }

    public function setC1111(?bool $c1111): self
    {
        $this->c1111 = $c1111;

        return $this;
    }

    public function getC1112(): ?bool
    {
        return $this->c1112;
    }

    public function setC1112(?bool $c1112): self
    {
        $this->c1112 = $c1112;

        return $this;
    }

    public function getC1113(): ?bool
    {
        return $this->c1113;
    }

    public function setC1113(?bool $c1113): self
    {
        $this->c1113 = $c1113;

        return $this;
    }

    public function getC1114(): ?bool
    {
        return $this->c1114;
    }

    public function setC1114(?bool $c1114): self
    {
        $this->c1114 = $c1114;

        return $this;
    }

    public function getC1115(): ?bool
    {
        return $this->c1115;
    }

    public function setC1115(?bool $c1115): self
    {
        $this->c1115 = $c1115;

        return $this;
    }

    public function getC1130(): ?bool
    {
        return $this->c1130;
    }

    public function setC1130(?bool $c1130): self
    {
        $this->c1130 = $c1130;

        return $this;
    }

    public function getC1131(): ?bool
    {
        return $this->c1131;
    }

    public function setC1131(?bool $c1131): self
    {
        $this->c1131 = $c1131;

        return $this;
    }

    public function getC1132(): ?bool
    {
        return $this->c1132;
    }

    public function setC1132(?bool $c1132): self
    {
        $this->c1132 = $c1132;

        return $this;
    }

    public function getC1133(): ?bool
    {
        return $this->c1133;
    }

    public function setC1133(?bool $c1133): self
    {
        $this->c1133 = $c1133;

        return $this;
    }

    public function getC1134(): ?bool
    {
        return $this->c1134;
    }

    public function setC1134(?bool $c1134): self
    {
        $this->c1134 = $c1134;

        return $this;
    }

    public function getC1135(): ?bool
    {
        return $this->c1135;
    }

    public function setC1135(?bool $c1135): self
    {
        $this->c1135 = $c1135;

        return $this;
    }

    public function getC1136(): ?bool
    {
        return $this->c1136;
    }

    public function setC1136(?bool $c1136): self
    {
        $this->c1136 = $c1136;

        return $this;
    }

    public function getC1137(): ?bool
    {
        return $this->c1137;
    }

    public function setC1137(?bool $c1137): self
    {
        $this->c1137 = $c1137;

        return $this;
    }

    public function getC1150(): ?bool
    {
        return $this->c1150;
    }

    public function setC1150(?bool $c1150): self
    {
        $this->c1150 = $c1150;

        return $this;
    }

    public function getC1151(): ?bool
    {
        return $this->c1151;
    }

    public function setC1151(?bool $c1151): self
    {
        $this->c1151 = $c1151;

        return $this;
    }

    public function getC1152(): ?bool
    {
        return $this->c1152;
    }

    public function setC1152(?bool $c1152): self
    {
        $this->c1152 = $c1152;

        return $this;
    }

    public function getC1153(): ?bool
    {
        return $this->c1153;
    }

    public function setC1153(?bool $c1153): self
    {
        $this->c1153 = $c1153;

        return $this;
    }

    public function getC1154(): ?bool
    {
        return $this->c1154;
    }

    public function setC1154(?bool $c1154): self
    {
        $this->c1154 = $c1154;

        return $this;
    }

    public function getC1155(): ?bool
    {
        return $this->c1155;
    }

    public function setC1155(?bool $c1155): self
    {
        $this->c1155 = $c1155;

        return $this;
    }

    public function getC1156(): ?bool
    {
        return $this->c1156;
    }

    public function setC1156(?bool $c1156): self
    {
        $this->c1156 = $c1156;

        return $this;
    }

    public function getC1157(): ?bool
    {
        return $this->c1157;
    }

    public function setC1157(?bool $c1157): self
    {
        $this->c1157 = $c1157;

        return $this;
    }

    public function getC1158(): ?bool
    {
        return $this->c1158;
    }

    public function setC1158(?bool $c1158): self
    {
        $this->c1158 = $c1158;

        return $this;
    }

    public function getC1159(): ?bool
    {
        return $this->c1159;
    }

    public function setC1159(?bool $c1159): self
    {
        $this->c1159 = $c1159;

        return $this;
    }

    public function getC1160(): ?bool
    {
        return $this->c1160;
    }

    public function setC1160(?bool $c1160): self
    {
        $this->c1160 = $c1160;

        return $this;
    }

    public function getC1161(): ?bool
    {
        return $this->c1161;
    }

    public function setC1161(?bool $c1161): self
    {
        $this->c1161 = $c1161;

        return $this;
    }

    public function getC1162(): ?bool
    {
        return $this->c1162;
    }

    public function setC1162(?bool $c1162): self
    {
        $this->c1162 = $c1162;

        return $this;
    }

    public function getC1163(): ?bool
    {
        return $this->c1163;
    }

    public function setC1163(?bool $c1163): self
    {
        $this->c1163 = $c1163;

        return $this;
    }

    public function getC1164(): ?bool
    {
        return $this->c1164;
    }

    public function setC1164(?bool $c1164): self
    {
        $this->c1164 = $c1164;

        return $this;
    }

    public function getC1165(): ?bool
    {
        return $this->c1165;
    }

    public function setC1165(?bool $c1165): self
    {
        $this->c1165 = $c1165;

        return $this;
    }

    public function getC1166(): ?bool
    {
        return $this->c1166;
    }

    public function setC1166(?bool $c1166): self
    {
        $this->c1166 = $c1166;

        return $this;
    }

    public function getC1167(): ?bool
    {
        return $this->c1167;
    }

    public function setC1167(?bool $c1167): self
    {
        $this->c1167 = $c1167;

        return $this;
    }

    public function getC1168(): ?bool
    {
        return $this->c1168;
    }

    public function setC1168(?bool $c1168): self
    {
        $this->c1168 = $c1168;

        return $this;
    }

    public function getC1169(): ?bool
    {
        return $this->c1169;
    }

    public function setC1169(?bool $c1169): self
    {
        $this->c1169 = $c1169;

        return $this;
    }

    public function getC1170(): ?bool
    {
        return $this->c1170;
    }

    public function setC1170(?bool $c1170): self
    {
        $this->c1170 = $c1170;

        return $this;
    }

    public function getC1171(): ?bool
    {
        return $this->c1171;
    }

    public function setC1171(?bool $c1171): self
    {
        $this->c1171 = $c1171;

        return $this;
    }

    public function getC1172(): ?bool
    {
        return $this->c1172;
    }

    public function setC1172(?bool $c1172): self
    {
        $this->c1172 = $c1172;

        return $this;
    }

    public function getC1173(): ?bool
    {
        return $this->c1173;
    }

    public function setC1173(?bool $c1173): self
    {
        $this->c1173 = $c1173;

        return $this;
    }

    public function getC1174(): ?bool
    {
        return $this->c1174;
    }

    public function setC1174(?bool $c1174): self
    {
        $this->c1174 = $c1174;

        return $this;
    }

    public function getC1175(): ?bool
    {
        return $this->c1175;
    }

    public function setC1175(?bool $c1175): self
    {
        $this->c1175 = $c1175;

        return $this;
    }

    public function getC1176(): ?bool
    {
        return $this->c1176;
    }

    public function setC1176(?bool $c1176): self
    {
        $this->c1176 = $c1176;

        return $this;
    }

    public function getC1177(): ?bool
    {
        return $this->c1177;
    }

    public function setC1177(?bool $c1177): self
    {
        $this->c1177 = $c1177;

        return $this;
    }

    public function getC1178(): ?bool
    {
        return $this->c1178;
    }

    public function setC1178(?bool $c1178): self
    {
        $this->c1178 = $c1178;

        return $this;
    }

    public function getC1179(): ?bool
    {
        return $this->c1179;
    }

    public function setC1179(?bool $c1179): self
    {
        $this->c1179 = $c1179;

        return $this;
    }

    public function getC1180(): ?bool
    {
        return $this->c1180;
    }

    public function setC1180(?bool $c1180): self
    {
        $this->c1180 = $c1180;

        return $this;
    }

    public function getC1181(): ?bool
    {
        return $this->c1181;
    }

    public function setC1181(?bool $c1181): self
    {
        $this->c1181 = $c1181;

        return $this;
    }

    public function getC1182(): ?bool
    {
        return $this->c1182;
    }

    public function setC1182(?bool $c1182): self
    {
        $this->c1182 = $c1182;

        return $this;
    }

    public function getC1183(): ?bool
    {
        return $this->c1183;
    }

    public function setC1183(?bool $c1183): self
    {
        $this->c1183 = $c1183;

        return $this;
    }

    public function getC1184(): ?bool
    {
        return $this->c1184;
    }

    public function setC1184(?bool $c1184): self
    {
        $this->c1184 = $c1184;

        return $this;
    }

    public function getC1185(): ?bool
    {
        return $this->c1185;
    }

    public function setC1185(?bool $c1185): self
    {
        $this->c1185 = $c1185;

        return $this;
    }

    public function getC1186(): ?bool
    {
        return $this->c1186;
    }

    public function setC1186(?bool $c1186): self
    {
        $this->c1186 = $c1186;

        return $this;
    }

    public function getC1187(): ?bool
    {
        return $this->c1187;
    }

    public function setC1187(?bool $c1187): self
    {
        $this->c1187 = $c1187;

        return $this;
    }

    public function getC1188(): ?bool
    {
        return $this->c1188;
    }

    public function setC1188(?bool $c1188): self
    {
        $this->c1188 = $c1188;

        return $this;
    }

    public function getC1189(): ?bool
    {
        return $this->c1189;
    }

    public function setC1189(?bool $c1189): self
    {
        $this->c1189 = $c1189;

        return $this;
    }

    public function getC1190(): ?bool
    {
        return $this->c1190;
    }

    public function setC1190(?bool $c1190): self
    {
        $this->c1190 = $c1190;

        return $this;
    }

    public function getC1191(): ?bool
    {
        return $this->c1191;
    }

    public function setC1191(?bool $c1191): self
    {
        $this->c1191 = $c1191;

        return $this;
    }

    public function getC1192(): ?bool
    {
        return $this->c1192;
    }

    public function setC1192(?bool $c1192): self
    {
        $this->c1192 = $c1192;

        return $this;
    }

    public function getC1193(): ?bool
    {
        return $this->c1193;
    }

    public function setC1193(?bool $c1193): self
    {
        $this->c1193 = $c1193;

        return $this;
    }

    public function getC1194(): ?bool
    {
        return $this->c1194;
    }

    public function setC1194(?bool $c1194): self
    {
        $this->c1194 = $c1194;

        return $this;
    }

    public function getC1195(): ?bool
    {
        return $this->c1195;
    }

    public function setC1195(?bool $c1195): self
    {
        $this->c1195 = $c1195;

        return $this;
    }

    public function getC1196(): ?bool
    {
        return $this->c1196;
    }

    public function setC1196(?bool $c1196): self
    {
        $this->c1196 = $c1196;

        return $this;
    }

    public function getC1197(): ?bool
    {
        return $this->c1197;
    }

    public function setC1197(?bool $c1197): self
    {
        $this->c1197 = $c1197;

        return $this;
    }

    public function getC1198(): ?bool
    {
        return $this->c1198;
    }

    public function setC1198(?bool $c1198): self
    {
        $this->c1198 = $c1198;

        return $this;
    }

    public function getC1199(): ?bool
    {
        return $this->c1199;
    }

    public function setC1199(?bool $c1199): self
    {
        $this->c1199 = $c1199;

        return $this;
    }

    public function getC1200(): ?bool
    {
        return $this->c1200;
    }

    public function setC1200(?bool $c1200): self
    {
        $this->c1200 = $c1200;

        return $this;
    }

    public function getC1201(): ?bool
    {
        return $this->c1201;
    }

    public function setC1201(?bool $c1201): self
    {
        $this->c1201 = $c1201;

        return $this;
    }

    public function getC1202(): ?bool
    {
        return $this->c1202;
    }

    public function setC1202(?bool $c1202): self
    {
        $this->c1202 = $c1202;

        return $this;
    }

    public function getC1203(): ?bool
    {
        return $this->c1203;
    }

    public function setC1203(?bool $c1203): self
    {
        $this->c1203 = $c1203;

        return $this;
    }

    public function getC1204(): ?bool
    {
        return $this->c1204;
    }

    public function setC1204(?bool $c1204): self
    {
        $this->c1204 = $c1204;

        return $this;
    }

    public function getC1205(): ?bool
    {
        return $this->c1205;
    }

    public function setC1205(?bool $c1205): self
    {
        $this->c1205 = $c1205;

        return $this;
    }

    public function getC1206(): ?bool
    {
        return $this->c1206;
    }

    public function setC1206(?bool $c1206): self
    {
        $this->c1206 = $c1206;

        return $this;
    }

    public function getC1207(): ?bool
    {
        return $this->c1207;
    }

    public function setC1207(?bool $c1207): self
    {
        $this->c1207 = $c1207;

        return $this;
    }

    public function getC1208(): ?bool
    {
        return $this->c1208;
    }

    public function setC1208(?bool $c1208): self
    {
        $this->c1208 = $c1208;

        return $this;
    }

    public function getC1209(): ?bool
    {
        return $this->c1209;
    }

    public function setC1209(?bool $c1209): self
    {
        $this->c1209 = $c1209;

        return $this;
    }

    public function getC1210(): ?bool
    {
        return $this->c1210;
    }

    public function setC1210(?bool $c1210): self
    {
        $this->c1210 = $c1210;

        return $this;
    }

    public function getC1211(): ?bool
    {
        return $this->c1211;
    }

    public function setC1211(?bool $c1211): self
    {
        $this->c1211 = $c1211;

        return $this;
    }

    public function getC1212(): ?bool
    {
        return $this->c1212;
    }

    public function setC1212(?bool $c1212): self
    {
        $this->c1212 = $c1212;

        return $this;
    }

    public function getC1213(): ?bool
    {
        return $this->c1213;
    }

    public function setC1213(?bool $c1213): self
    {
        $this->c1213 = $c1213;

        return $this;
    }

    public function getC1214(): ?bool
    {
        return $this->c1214;
    }

    public function setC1214(?bool $c1214): self
    {
        $this->c1214 = $c1214;

        return $this;
    }

    public function getC1215(): ?bool
    {
        return $this->c1215;
    }

    public function setC1215(?bool $c1215): self
    {
        $this->c1215 = $c1215;

        return $this;
    }

    public function getC1250(): ?bool
    {
        return $this->c1250;
    }

    public function setC1250(?bool $c1250): self
    {
        $this->c1250 = $c1250;

        return $this;
    }

    public function getC1251(): ?bool
    {
        return $this->c1251;
    }

    public function setC1251(?bool $c1251): self
    {
        $this->c1251 = $c1251;

        return $this;
    }

    public function getC1252(): ?bool
    {
        return $this->c1252;
    }

    public function setC1252(?bool $c1252): self
    {
        $this->c1252 = $c1252;

        return $this;
    }

    public function getC1253(): ?bool
    {
        return $this->c1253;
    }

    public function setC1253(?bool $c1253): self
    {
        $this->c1253 = $c1253;

        return $this;
    }

    public function getC1254(): ?bool
    {
        return $this->c1254;
    }

    public function setC1254(?bool $c1254): self
    {
        $this->c1254 = $c1254;

        return $this;
    }

    public function getC1255(): ?bool
    {
        return $this->c1255;
    }

    public function setC1255(?bool $c1255): self
    {
        $this->c1255 = $c1255;

        return $this;
    }

    public function getC1310(): ?bool
    {
        return $this->c1310;
    }

    public function setC1310(?bool $c1310): self
    {
        $this->c1310 = $c1310;

        return $this;
    }

    public function getC1311(): ?bool
    {
        return $this->c1311;
    }

    public function setC1311(?bool $c1311): self
    {
        $this->c1311 = $c1311;

        return $this;
    }

    public function getC1312(): ?bool
    {
        return $this->c1312;
    }

    public function setC1312(?bool $c1312): self
    {
        $this->c1312 = $c1312;

        return $this;
    }

    public function getC1313(): ?bool
    {
        return $this->c1313;
    }

    public function setC1313(?bool $c1313): self
    {
        $this->c1313 = $c1313;

        return $this;
    }

    public function getC1314(): ?bool
    {
        return $this->c1314;
    }

    public function setC1314(?bool $c1314): self
    {
        $this->c1314 = $c1314;

        return $this;
    }

    public function getC1315(): ?bool
    {
        return $this->c1315;
    }

    public function setC1315(?bool $c1315): self
    {
        $this->c1315 = $c1315;

        return $this;
    }

    public function getC1410(): ?bool
    {
        return $this->c1410;
    }

    public function setC1410(?bool $c1410): self
    {
        $this->c1410 = $c1410;

        return $this;
    }

    public function getC1411(): ?bool
    {
        return $this->c1411;
    }

    public function setC1411(?bool $c1411): self
    {
        $this->c1411 = $c1411;

        return $this;
    }

    public function getC1412(): ?bool
    {
        return $this->c1412;
    }

    public function setC1412(?bool $c1412): self
    {
        $this->c1412 = $c1412;

        return $this;
    }

    public function getC1413(): ?bool
    {
        return $this->c1413;
    }

    public function setC1413(?bool $c1413): self
    {
        $this->c1413 = $c1413;

        return $this;
    }

    public function getC1414(): ?bool
    {
        return $this->c1414;
    }

    public function setC1414(?bool $c1414): self
    {
        $this->c1414 = $c1414;

        return $this;
    }

    public function getC1415(): ?bool
    {
        return $this->c1415;
    }

    public function setC1415(?bool $c1415): self
    {
        $this->c1415 = $c1415;

        return $this;
    }

    public function getC1450(): ?bool
    {
        return $this->c1450;
    }

    public function setC1450(?bool $c1450): self
    {
        $this->c1450 = $c1450;

        return $this;
    }

    public function getC1451(): ?bool
    {
        return $this->c1451;
    }

    public function setC1451(?bool $c1451): self
    {
        $this->c1451 = $c1451;

        return $this;
    }

    public function getC1452(): ?bool
    {
        return $this->c1452;
    }

    public function setC1452(?bool $c1452): self
    {
        $this->c1452 = $c1452;

        return $this;
    }

    public function getC1453(): ?bool
    {
        return $this->c1453;
    }

    public function setC1453(?bool $c1453): self
    {
        $this->c1453 = $c1453;

        return $this;
    }

    public function getC1454(): ?bool
    {
        return $this->c1454;
    }

    public function setC1454(?bool $c1454): self
    {
        $this->c1454 = $c1454;

        return $this;
    }

    public function getC1455(): ?bool
    {
        return $this->c1455;
    }

    public function setC1455(?bool $c1455): self
    {
        $this->c1455 = $c1455;

        return $this;
    }

    public function getC1510(): ?bool
    {
        return $this->c1510;
    }

    public function setC1510(?bool $c1510): self
    {
        $this->c1510 = $c1510;

        return $this;
    }

    public function getC1511(): ?bool
    {
        return $this->c1511;
    }

    public function setC1511(?bool $c1511): self
    {
        $this->c1511 = $c1511;

        return $this;
    }

    public function getC1512(): ?bool
    {
        return $this->c1512;
    }

    public function setC1512(?bool $c1512): self
    {
        $this->c1512 = $c1512;

        return $this;
    }

    public function getC1513(): ?bool
    {
        return $this->c1513;
    }

    public function setC1513(?bool $c1513): self
    {
        $this->c1513 = $c1513;

        return $this;
    }

    public function getC1514(): ?bool
    {
        return $this->c1514;
    }

    public function setC1514(?bool $c1514): self
    {
        $this->c1514 = $c1514;

        return $this;
    }

    public function getC1515(): ?bool
    {
        return $this->c1515;
    }

    public function setC1515(?bool $c1515): self
    {
        $this->c1515 = $c1515;

        return $this;
    }

    public function getC1516(): ?bool
    {
        return $this->c1516;
    }

    public function setC1516(?bool $c1516): self
    {
        $this->c1516 = $c1516;

        return $this;
    }

    public function getC1517(): ?bool
    {
        return $this->c1517;
    }

    public function setC1517(?bool $c1517): self
    {
        $this->c1517 = $c1517;

        return $this;
    }

    public function getC1518(): ?bool
    {
        return $this->c1518;
    }

    public function setC1518(?bool $c1518): self
    {
        $this->c1518 = $c1518;

        return $this;
    }

    public function getC1550(): ?bool
    {
        return $this->c1550;
    }

    public function setC1550(?bool $c1550): self
    {
        $this->c1550 = $c1550;

        return $this;
    }

    public function getC1551(): ?bool
    {
        return $this->c1551;
    }

    public function setC1551(?bool $c1551): self
    {
        $this->c1551 = $c1551;

        return $this;
    }

    public function getC1552(): ?bool
    {
        return $this->c1552;
    }

    public function setC1552(?bool $c1552): self
    {
        $this->c1552 = $c1552;

        return $this;
    }

    public function getC1553(): ?bool
    {
        return $this->c1553;
    }

    public function setC1553(?bool $c1553): self
    {
        $this->c1553 = $c1553;

        return $this;
    }

    public function getC1554(): ?bool
    {
        return $this->c1554;
    }

    public function setC1554(?bool $c1554): self
    {
        $this->c1554 = $c1554;

        return $this;
    }

    public function getC1555(): ?bool
    {
        return $this->c1555;
    }

    public function setC1555(?bool $c1555): self
    {
        $this->c1555 = $c1555;

        return $this;
    }

    public function getC1610(): ?bool
    {
        return $this->c1610;
    }

    public function setC1610(?bool $c1610): self
    {
        $this->c1610 = $c1610;

        return $this;
    }

    public function getC1611(): ?bool
    {
        return $this->c1611;
    }

    public function setC1611(?bool $c1611): self
    {
        $this->c1611 = $c1611;

        return $this;
    }

    public function getC1612(): ?bool
    {
        return $this->c1612;
    }

    public function setC1612(?bool $c1612): self
    {
        $this->c1612 = $c1612;

        return $this;
    }

    public function getC1613(): ?bool
    {
        return $this->c1613;
    }

    public function setC1613(?bool $c1613): self
    {
        $this->c1613 = $c1613;

        return $this;
    }

    public function getC1614(): ?bool
    {
        return $this->c1614;
    }

    public function setC1614(?bool $c1614): self
    {
        $this->c1614 = $c1614;

        return $this;
    }

    public function getC1615(): ?bool
    {
        return $this->c1615;
    }

    public function setC1615(?bool $c1615): self
    {
        $this->c1615 = $c1615;

        return $this;
    }

    public function getC1650(): ?bool
    {
        return $this->c1650;
    }

    public function setC1650(?bool $c1650): self
    {
        $this->c1650 = $c1650;

        return $this;
    }

    public function getC1651(): ?bool
    {
        return $this->c1651;
    }

    public function setC1651(?bool $c1651): self
    {
        $this->c1651 = $c1651;

        return $this;
    }

    public function getC1652(): ?bool
    {
        return $this->c1652;
    }

    public function setC1652(?bool $c1652): self
    {
        $this->c1652 = $c1652;

        return $this;
    }

    public function getC1653(): ?bool
    {
        return $this->c1653;
    }

    public function setC1653(?bool $c1653): self
    {
        $this->c1653 = $c1653;

        return $this;
    }

    public function getC1654(): ?bool
    {
        return $this->c1654;
    }

    public function setC1654(?bool $c1654): self
    {
        $this->c1654 = $c1654;

        return $this;
    }

    public function getC1655(): ?bool
    {
        return $this->c1655;
    }

    public function setC1655(?bool $c1655): self
    {
        $this->c1655 = $c1655;

        return $this;
    }

    public function getC1710(): ?bool
    {
        return $this->c1710;
    }

    public function setC1710(?bool $c1710): self
    {
        $this->c1710 = $c1710;

        return $this;
    }

    public function getC1711(): ?bool
    {
        return $this->c1711;
    }

    public function setC1711(?bool $c1711): self
    {
        $this->c1711 = $c1711;

        return $this;
    }

    public function getC1712(): ?bool
    {
        return $this->c1712;
    }

    public function setC1712(?bool $c1712): self
    {
        $this->c1712 = $c1712;

        return $this;
    }

    public function getC1713(): ?bool
    {
        return $this->c1713;
    }

    public function setC1713(?bool $c1713): self
    {
        $this->c1713 = $c1713;

        return $this;
    }

    public function getC1750(): ?bool
    {
        return $this->c1750;
    }

    public function setC1750(?bool $c1750): self
    {
        $this->c1750 = $c1750;

        return $this;
    }

    public function getC1751(): ?bool
    {
        return $this->c1751;
    }

    public function setC1751(?bool $c1751): self
    {
        $this->c1751 = $c1751;

        return $this;
    }

    public function getC1752(): ?bool
    {
        return $this->c1752;
    }

    public function setC1752(?bool $c1752): self
    {
        $this->c1752 = $c1752;

        return $this;
    }

    public function getC1753(): ?bool
    {
        return $this->c1753;
    }

    public function setC1753(?bool $c1753): self
    {
        $this->c1753 = $c1753;

        return $this;
    }

    public function getC1754(): ?bool
    {
        return $this->c1754;
    }

    public function setC1754(?bool $c1754): self
    {
        $this->c1754 = $c1754;

        return $this;
    }

    public function getC1755(): ?bool
    {
        return $this->c1755;
    }

    public function setC1755(?bool $c1755): self
    {
        $this->c1755 = $c1755;

        return $this;
    }

    public function getC1810(): ?bool
    {
        return $this->c1810;
    }

    public function setC1810(?bool $c1810): self
    {
        $this->c1810 = $c1810;

        return $this;
    }

    public function getC1811(): ?bool
    {
        return $this->c1811;
    }

    public function setC1811(?bool $c1811): self
    {
        $this->c1811 = $c1811;

        return $this;
    }

    public function getC1812(): ?bool
    {
        return $this->c1812;
    }

    public function setC1812(?bool $c1812): self
    {
        $this->c1812 = $c1812;

        return $this;
    }

    public function getC1813(): ?bool
    {
        return $this->c1813;
    }

    public function setC1813(?bool $c1813): self
    {
        $this->c1813 = $c1813;

        return $this;
    }

    public function getC1814(): ?bool
    {
        return $this->c1814;
    }

    public function setC1814(?bool $c1814): self
    {
        $this->c1814 = $c1814;

        return $this;
    }

    public function getC1815(): ?bool
    {
        return $this->c1815;
    }

    public function setC1815(?bool $c1815): self
    {
        $this->c1815 = $c1815;

        return $this;
    }

    public function getC1830(): ?bool
    {
        return $this->c1830;
    }

    public function setC1830(?bool $c1830): self
    {
        $this->c1830 = $c1830;

        return $this;
    }

    public function getC1831(): ?bool
    {
        return $this->c1831;
    }

    public function setC1831(?bool $c1831): self
    {
        $this->c1831 = $c1831;

        return $this;
    }

    public function getC1832(): ?bool
    {
        return $this->c1832;
    }

    public function setC1832(?bool $c1832): self
    {
        $this->c1832 = $c1832;

        return $this;
    }

    public function getC1833(): ?bool
    {
        return $this->c1833;
    }

    public function setC1833(?bool $c1833): self
    {
        $this->c1833 = $c1833;

        return $this;
    }

    public function getC1834(): ?bool
    {
        return $this->c1834;
    }

    public function setC1834(?bool $c1834): self
    {
        $this->c1834 = $c1834;

        return $this;
    }

    public function getC1835(): ?bool
    {
        return $this->c1835;
    }

    public function setC1835(?bool $c1835): self
    {
        $this->c1835 = $c1835;

        return $this;
    }

    public function getC1850(): ?bool
    {
        return $this->c1850;
    }

    public function setC1850(?bool $c1850): self
    {
        $this->c1850 = $c1850;

        return $this;
    }

    public function getC1851(): ?bool
    {
        return $this->c1851;
    }

    public function setC1851(?bool $c1851): self
    {
        $this->c1851 = $c1851;

        return $this;
    }

    public function getC1852(): ?bool
    {
        return $this->c1852;
    }

    public function setC1852(?bool $c1852): self
    {
        $this->c1852 = $c1852;

        return $this;
    }

    public function getC1853(): ?bool
    {
        return $this->c1853;
    }

    public function setC1853(?bool $c1853): self
    {
        $this->c1853 = $c1853;

        return $this;
    }

    public function getC1854(): ?bool
    {
        return $this->c1854;
    }

    public function setC1854(?bool $c1854): self
    {
        $this->c1854 = $c1854;

        return $this;
    }

    public function getC1855(): ?bool
    {
        return $this->c1855;
    }

    public function setC1855(?bool $c1855): self
    {
        $this->c1855 = $c1855;

        return $this;
    }

    public function getC1910(): ?bool
    {
        return $this->c1910;
    }

    public function setC1910(?bool $c1910): self
    {
        $this->c1910 = $c1910;

        return $this;
    }

    public function getC1911(): ?bool
    {
        return $this->c1911;
    }

    public function setC1911(?bool $c1911): self
    {
        $this->c1911 = $c1911;

        return $this;
    }

    public function getC1912(): ?bool
    {
        return $this->c1912;
    }

    public function setC1912(?bool $c1912): self
    {
        $this->c1912 = $c1912;

        return $this;
    }

    public function getC1913(): ?bool
    {
        return $this->c1913;
    }

    public function setC1913(?bool $c1913): self
    {
        $this->c1913 = $c1913;

        return $this;
    }

    public function getC1914(): ?bool
    {
        return $this->c1914;
    }

    public function setC1914(?bool $c1914): self
    {
        $this->c1914 = $c1914;

        return $this;
    }

    public function getC1950(): ?bool
    {
        return $this->c1950;
    }

    public function setC1950(?bool $c1950): self
    {
        $this->c1950 = $c1950;

        return $this;
    }

    public function getC1951(): ?bool
    {
        return $this->c1951;
    }

    public function setC1951(?bool $c1951): self
    {
        $this->c1951 = $c1951;

        return $this;
    }

    public function getC1952(): ?bool
    {
        return $this->c1952;
    }

    public function setC1952(?bool $c1952): self
    {
        $this->c1952 = $c1952;

        return $this;
    }

    public function getC1953(): ?bool
    {
        return $this->c1953;
    }

    public function setC1953(?bool $c1953): self
    {
        $this->c1953 = $c1953;

        return $this;
    }

    public function getC1954(): ?bool
    {
        return $this->c1954;
    }

    public function setC1954(?bool $c1954): self
    {
        $this->c1954 = $c1954;

        return $this;
    }

    public function getC1955(): ?bool
    {
        return $this->c1955;
    }

    public function setC1955(?bool $c1955): self
    {
        $this->c1955 = $c1955;

        return $this;
    }

    public function getC2000(): ?bool
    {
        return $this->c2000;
    }

    public function setC2000(?bool $c2000): self
    {
        $this->c2000 = $c2000;

        return $this;
    }

    public function getC2100(): ?bool
    {
        return $this->c2100;
    }

    public function setC2100(?bool $c2100): self
    {
        $this->c2100 = $c2100;

        return $this;
    }

    public function getC2110(): ?bool
    {
        return $this->c2110;
    }

    public function setC2110(?bool $c2110): self
    {
        $this->c2110 = $c2110;

        return $this;
    }

    public function getC2111(): ?bool
    {
        return $this->c2111;
    }

    public function setC2111(?bool $c2111): self
    {
        $this->c2111 = $c2111;

        return $this;
    }

    public function getC2112(): ?bool
    {
        return $this->c2112;
    }

    public function setC2112(?bool $c2112): self
    {
        $this->c2112 = $c2112;

        return $this;
    }

    public function getC2113(): ?bool
    {
        return $this->c2113;
    }

    public function setC2113(?bool $c2113): self
    {
        $this->c2113 = $c2113;

        return $this;
    }

    public function getC2120(): ?bool
    {
        return $this->c2120;
    }

    public function setC2120(?bool $c2120): self
    {
        $this->c2120 = $c2120;

        return $this;
    }

    public function getC2121(): ?bool
    {
        return $this->c2121;
    }

    public function setC2121(?bool $c2121): self
    {
        $this->c2121 = $c2121;

        return $this;
    }

    public function getC2122(): ?bool
    {
        return $this->c2122;
    }

    public function setC2122(?bool $c2122): self
    {
        $this->c2122 = $c2122;

        return $this;
    }

    public function getC2123(): ?bool
    {
        return $this->c2123;
    }

    public function setC2123(?bool $c2123): self
    {
        $this->c2123 = $c2123;

        return $this;
    }

    public function getC2130(): ?bool
    {
        return $this->c2130;
    }

    public function setC2130(?bool $c2130): self
    {
        $this->c2130 = $c2130;

        return $this;
    }

    public function getC2131(): ?bool
    {
        return $this->c2131;
    }

    public function setC2131(?bool $c2131): self
    {
        $this->c2131 = $c2131;

        return $this;
    }

    public function getC2132(): ?bool
    {
        return $this->c2132;
    }

    public function setC2132(?bool $c2132): self
    {
        $this->c2132 = $c2132;

        return $this;
    }

    public function getC2133(): ?bool
    {
        return $this->c2133;
    }

    public function setC2133(?bool $c2133): self
    {
        $this->c2133 = $c2133;

        return $this;
    }

    public function getC2140(): ?bool
    {
        return $this->c2140;
    }

    public function setC2140(?bool $c2140): self
    {
        $this->c2140 = $c2140;

        return $this;
    }

    public function getC2141(): ?bool
    {
        return $this->c2141;
    }

    public function setC2141(?bool $c2141): self
    {
        $this->c2141 = $c2141;

        return $this;
    }

    public function getC2142(): ?bool
    {
        return $this->c2142;
    }

    public function setC2142(?bool $c2142): self
    {
        $this->c2142 = $c2142;

        return $this;
    }

    public function getC2143(): ?bool
    {
        return $this->c2143;
    }

    public function setC2143(?bool $c2143): self
    {
        $this->c2143 = $c2143;

        return $this;
    }

    public function getC2150(): ?bool
    {
        return $this->c2150;
    }

    public function setC2150(?bool $c2150): self
    {
        $this->c2150 = $c2150;

        return $this;
    }

    public function getC2151(): ?bool
    {
        return $this->c2151;
    }

    public function setC2151(?bool $c2151): self
    {
        $this->c2151 = $c2151;

        return $this;
    }

    public function getC2152(): ?bool
    {
        return $this->c2152;
    }

    public function setC2152(?bool $c2152): self
    {
        $this->c2152 = $c2152;

        return $this;
    }

    public function getC2153(): ?bool
    {
        return $this->c2153;
    }

    public function setC2153(?bool $c2153): self
    {
        $this->c2153 = $c2153;

        return $this;
    }

    public function getC2160(): ?bool
    {
        return $this->c2160;
    }

    public function setC2160(?bool $c2160): self
    {
        $this->c2160 = $c2160;

        return $this;
    }

    public function getC2161(): ?bool
    {
        return $this->c2161;
    }

    public function setC2161(?bool $c2161): self
    {
        $this->c2161 = $c2161;

        return $this;
    }

    public function getC2162(): ?bool
    {
        return $this->c2162;
    }

    public function setC2162(?bool $c2162): self
    {
        $this->c2162 = $c2162;

        return $this;
    }

    public function getC2163(): ?bool
    {
        return $this->c2163;
    }

    public function setC2163(?bool $c2163): self
    {
        $this->c2163 = $c2163;

        return $this;
    }

    public function getC2200(): ?bool
    {
        return $this->c2200;
    }

    public function setC2200(?bool $c2200): self
    {
        $this->c2200 = $c2200;

        return $this;
    }

    public function getC2210(): ?bool
    {
        return $this->c2210;
    }

    public function setC2210(?bool $c2210): self
    {
        $this->c2210 = $c2210;

        return $this;
    }

    public function getC2211(): ?bool
    {
        return $this->c2211;
    }

    public function setC2211(?bool $c2211): self
    {
        $this->c2211 = $c2211;

        return $this;
    }

    public function getC2212(): ?bool
    {
        return $this->c2212;
    }

    public function setC2212(?bool $c2212): self
    {
        $this->c2212 = $c2212;

        return $this;
    }

    public function getC2213(): ?bool
    {
        return $this->c2213;
    }

    public function setC2213(?bool $c2213): self
    {
        $this->c2213 = $c2213;

        return $this;
    }

    public function getC2220(): ?bool
    {
        return $this->c2220;
    }

    public function setC2220(?bool $c2220): self
    {
        $this->c2220 = $c2220;

        return $this;
    }

    public function getC2221(): ?bool
    {
        return $this->c2221;
    }

    public function setC2221(?bool $c2221): self
    {
        $this->c2221 = $c2221;

        return $this;
    }

    public function getC2222(): ?bool
    {
        return $this->c2222;
    }

    public function setC2222(?bool $c2222): self
    {
        $this->c2222 = $c2222;

        return $this;
    }

    public function getC2223(): ?bool
    {
        return $this->c2223;
    }

    public function setC2223(?bool $c2223): self
    {
        $this->c2223 = $c2223;

        return $this;
    }

    public function getC2230(): ?bool
    {
        return $this->c2230;
    }

    public function setC2230(?bool $c2230): self
    {
        $this->c2230 = $c2230;

        return $this;
    }

    public function getC2231(): ?bool
    {
        return $this->c2231;
    }

    public function setC2231(?bool $c2231): self
    {
        $this->c2231 = $c2231;

        return $this;
    }

    public function getC2232(): ?bool
    {
        return $this->c2232;
    }

    public function setC2232(?bool $c2232): self
    {
        $this->c2232 = $c2232;

        return $this;
    }

    public function getC2233(): ?bool
    {
        return $this->c2233;
    }

    public function setC2233(?bool $c2233): self
    {
        $this->c2233 = $c2233;

        return $this;
    }

    public function getC2240(): ?bool
    {
        return $this->c2240;
    }

    public function setC2240(?bool $c2240): self
    {
        $this->c2240 = $c2240;

        return $this;
    }

    public function getC2241(): ?bool
    {
        return $this->c2241;
    }

    public function setC2241(?bool $c2241): self
    {
        $this->c2241 = $c2241;

        return $this;
    }

    public function getC2242(): ?bool
    {
        return $this->c2242;
    }

    public function setC2242(?bool $c2242): self
    {
        $this->c2242 = $c2242;

        return $this;
    }

    public function getC2243(): ?bool
    {
        return $this->c2243;
    }

    public function setC2243(?bool $c2243): self
    {
        $this->c2243 = $c2243;

        return $this;
    }

    public function getC2250(): ?bool
    {
        return $this->c2250;
    }

    public function setC2250(?bool $c2250): self
    {
        $this->c2250 = $c2250;

        return $this;
    }

    public function getC2251(): ?bool
    {
        return $this->c2251;
    }

    public function setC2251(?bool $c2251): self
    {
        $this->c2251 = $c2251;

        return $this;
    }

    public function getC2252(): ?bool
    {
        return $this->c2252;
    }

    public function setC2252(?bool $c2252): self
    {
        $this->c2252 = $c2252;

        return $this;
    }

    public function getC2253(): ?bool
    {
        return $this->c2253;
    }

    public function setC2253(?bool $c2253): self
    {
        $this->c2253 = $c2253;

        return $this;
    }

    public function getC2260(): ?bool
    {
        return $this->c2260;
    }

    public function setC2260(?bool $c2260): self
    {
        $this->c2260 = $c2260;

        return $this;
    }

    public function getC2261(): ?bool
    {
        return $this->c2261;
    }

    public function setC2261(?bool $c2261): self
    {
        $this->c2261 = $c2261;

        return $this;
    }

    public function getC2262(): ?bool
    {
        return $this->c2262;
    }

    public function setC2262(?bool $c2262): self
    {
        $this->c2262 = $c2262;

        return $this;
    }

    public function getC2263(): ?bool
    {
        return $this->c2263;
    }

    public function setC2263(?bool $c2263): self
    {
        $this->c2263 = $c2263;

        return $this;
    }

    public function getC2270(): ?bool
    {
        return $this->c2270;
    }

    public function setC2270(?bool $c2270): self
    {
        $this->c2270 = $c2270;

        return $this;
    }

    public function getC2271(): ?bool
    {
        return $this->c2271;
    }

    public function setC2271(?bool $c2271): self
    {
        $this->c2271 = $c2271;

        return $this;
    }

    public function getC2272(): ?bool
    {
        return $this->c2272;
    }

    public function setC2272(?bool $c2272): self
    {
        $this->c2272 = $c2272;

        return $this;
    }

    public function getC2273(): ?bool
    {
        return $this->c2273;
    }

    public function setC2273(?bool $c2273): self
    {
        $this->c2273 = $c2273;

        return $this;
    }

    public function getC3000(): ?bool
    {
        return $this->c3000;
    }

    public function setC3000(?bool $c3000): self
    {
        $this->c3000 = $c3000;

        return $this;
    }

    public function getC3001(): ?bool
    {
        return $this->c3001;
    }

    public function setC3001(?bool $c3001): self
    {
        $this->c3001 = $c3001;

        return $this;
    }

    public function getC3010(): ?bool
    {
        return $this->c3010;
    }

    public function setC3010(?bool $c3010): self
    {
        $this->c3010 = $c3010;

        return $this;
    }

    public function getC3011(): ?bool
    {
        return $this->c3011;
    }

    public function setC3011(?bool $c3011): self
    {
        $this->c3011 = $c3011;

        return $this;
    }

    public function getC3012(): ?bool
    {
        return $this->c3012;
    }

    public function setC3012(?bool $c3012): self
    {
        $this->c3012 = $c3012;

        return $this;
    }

    public function getC3013(): ?bool
    {
        return $this->c3013;
    }

    public function setC3013(?bool $c3013): self
    {
        $this->c3013 = $c3013;

        return $this;
    }

    public function getC3014(): ?bool
    {
        return $this->c3014;
    }

    public function setC3014(?bool $c3014): self
    {
        $this->c3014 = $c3014;

        return $this;
    }

    public function getC3015(): ?bool
    {
        return $this->c3015;
    }

    public function setC3015(?bool $c3015): self
    {
        $this->c3015 = $c3015;

        return $this;
    }

    public function getC3016(): ?bool
    {
        return $this->c3016;
    }

    public function setC3016(?bool $c3016): self
    {
        $this->c3016 = $c3016;

        return $this;
    }

    public function getC3017(): ?bool
    {
        return $this->c3017;
    }

    public function setC3017(?bool $c3017): self
    {
        $this->c3017 = $c3017;

        return $this;
    }

    public function getC3018(): ?bool
    {
        return $this->c3018;
    }

    public function setC3018(?bool $c3018): self
    {
        $this->c3018 = $c3018;

        return $this;
    }

    public function getC3019(): ?bool
    {
        return $this->c3019;
    }

    public function setC3019(?bool $c3019): self
    {
        $this->c3019 = $c3019;

        return $this;
    }

    public function getC3020(): ?bool
    {
        return $this->c3020;
    }

    public function setC3020(?bool $c3020): self
    {
        $this->c3020 = $c3020;

        return $this;
    }

    public function getC3021(): ?bool
    {
        return $this->c3021;
    }

    public function setC3021(?bool $c3021): self
    {
        $this->c3021 = $c3021;

        return $this;
    }

    public function getC3022(): ?bool
    {
        return $this->c3022;
    }

    public function setC3022(?bool $c3022): self
    {
        $this->c3022 = $c3022;

        return $this;
    }

    public function getC3023(): ?bool
    {
        return $this->c3023;
    }

    public function setC3023(?bool $c3023): self
    {
        $this->c3023 = $c3023;

        return $this;
    }

    public function getC3024(): ?bool
    {
        return $this->c3024;
    }

    public function setC3024(?bool $c3024): self
    {
        $this->c3024 = $c3024;

        return $this;
    }

    public function getC3025(): ?bool
    {
        return $this->c3025;
    }

    public function setC3025(?bool $c3025): self
    {
        $this->c3025 = $c3025;

        return $this;
    }

    public function getC3026(): ?bool
    {
        return $this->c3026;
    }

    public function setC3026(?bool $c3026): self
    {
        $this->c3026 = $c3026;

        return $this;
    }

    public function getC3027(): ?bool
    {
        return $this->c3027;
    }

    public function setC3027(?bool $c3027): self
    {
        $this->c3027 = $c3027;

        return $this;
    }

    public function getC3028(): ?bool
    {
        return $this->c3028;
    }

    public function setC3028(?bool $c3028): self
    {
        $this->c3028 = $c3028;

        return $this;
    }

    public function getC3029(): ?bool
    {
        return $this->c3029;
    }

    public function setC3029(?bool $c3029): self
    {
        $this->c3029 = $c3029;

        return $this;
    }

    public function getC3210(): ?bool
    {
        return $this->c3210;
    }

    public function setC3210(?bool $c3210): self
    {
        $this->c3210 = $c3210;

        return $this;
    }

    public function getC3211(): ?bool
    {
        return $this->c3211;
    }

    public function setC3211(?bool $c3211): self
    {
        $this->c3211 = $c3211;

        return $this;
    }

    public function getC3212(): ?bool
    {
        return $this->c3212;
    }

    public function setC3212(?bool $c3212): self
    {
        $this->c3212 = $c3212;

        return $this;
    }

    public function getC3213(): ?bool
    {
        return $this->c3213;
    }

    public function setC3213(?bool $c3213): self
    {
        $this->c3213 = $c3213;

        return $this;
    }

    public function getC3214(): ?bool
    {
        return $this->c3214;
    }

    public function setC3214(?bool $c3214): self
    {
        $this->c3214 = $c3214;

        return $this;
    }

    public function getC3215(): ?bool
    {
        return $this->c3215;
    }

    public function setC3215(?bool $c3215): self
    {
        $this->c3215 = $c3215;

        return $this;
    }

    public function getC3216(): ?bool
    {
        return $this->c3216;
    }

    public function setC3216(?bool $c3216): self
    {
        $this->c3216 = $c3216;

        return $this;
    }

    public function getC3217(): ?bool
    {
        return $this->c3217;
    }

    public function setC3217(?bool $c3217): self
    {
        $this->c3217 = $c3217;

        return $this;
    }

    public function getC3218(): ?bool
    {
        return $this->c3218;
    }

    public function setC3218(?bool $c3218): self
    {
        $this->c3218 = $c3218;

        return $this;
    }

    public function getC3219(): ?bool
    {
        return $this->c3219;
    }

    public function setC3219(?bool $c3219): self
    {
        $this->c3219 = $c3219;

        return $this;
    }

    public function getC3220(): ?bool
    {
        return $this->c3220;
    }

    public function setC3220(?bool $c3220): self
    {
        $this->c3220 = $c3220;

        return $this;
    }

    public function getC3221(): ?bool
    {
        return $this->c3221;
    }

    public function setC3221(?bool $c3221): self
    {
        $this->c3221 = $c3221;

        return $this;
    }

    public function getC3222(): ?bool
    {
        return $this->c3222;
    }

    public function setC3222(?bool $c3222): self
    {
        $this->c3222 = $c3222;

        return $this;
    }

    public function getC3223(): ?bool
    {
        return $this->c3223;
    }

    public function setC3223(?bool $c3223): self
    {
        $this->c3223 = $c3223;

        return $this;
    }

    public function getC3224(): ?bool
    {
        return $this->c3224;
    }

    public function setC3224(?bool $c3224): self
    {
        $this->c3224 = $c3224;

        return $this;
    }

    public function getC3225(): ?bool
    {
        return $this->c3225;
    }

    public function setC3225(?bool $c3225): self
    {
        $this->c3225 = $c3225;

        return $this;
    }

    public function getC3226(): ?bool
    {
        return $this->c3226;
    }

    public function setC3226(?bool $c3226): self
    {
        $this->c3226 = $c3226;

        return $this;
    }

    public function getC3227(): ?bool
    {
        return $this->c3227;
    }

    public function setC3227(?bool $c3227): self
    {
        $this->c3227 = $c3227;

        return $this;
    }

    public function getC3228(): ?bool
    {
        return $this->c3228;
    }

    public function setC3228(?bool $c3228): self
    {
        $this->c3228 = $c3228;

        return $this;
    }

    public function getC3229(): ?bool
    {
        return $this->c3229;
    }

    public function setC3229(?bool $c3229): self
    {
        $this->c3229 = $c3229;

        return $this;
    }

    public function getC3230(): ?bool
    {
        return $this->c3230;
    }

    public function setC3230(?bool $c3230): self
    {
        $this->c3230 = $c3230;

        return $this;
    }

    public function getC3231(): ?bool
    {
        return $this->c3231;
    }

    public function setC3231(?bool $c3231): self
    {
        $this->c3231 = $c3231;

        return $this;
    }

    public function getC3232(): ?bool
    {
        return $this->c3232;
    }

    public function setC3232(?bool $c3232): self
    {
        $this->c3232 = $c3232;

        return $this;
    }

    public function getC3310(): ?bool
    {
        return $this->c3310;
    }

    public function setC3310(?bool $c3310): self
    {
        $this->c3310 = $c3310;

        return $this;
    }

    public function getC3311(): ?bool
    {
        return $this->c3311;
    }

    public function setC3311(?bool $c3311): self
    {
        $this->c3311 = $c3311;

        return $this;
    }

    public function getC3312(): ?bool
    {
        return $this->c3312;
    }

    public function setC3312(?bool $c3312): self
    {
        $this->c3312 = $c3312;

        return $this;
    }

    public function getC3313(): ?bool
    {
        return $this->c3313;
    }

    public function setC3313(?bool $c3313): self
    {
        $this->c3313 = $c3313;

        return $this;
    }

    public function getC3314(): ?bool
    {
        return $this->c3314;
    }

    public function setC3314(?bool $c3314): self
    {
        $this->c3314 = $c3314;

        return $this;
    }

    public function getC3315(): ?bool
    {
        return $this->c3315;
    }

    public function setC3315(?bool $c3315): self
    {
        $this->c3315 = $c3315;

        return $this;
    }

    public function getC3316(): ?bool
    {
        return $this->c3316;
    }

    public function setC3316(?bool $c3316): self
    {
        $this->c3316 = $c3316;

        return $this;
    }

    public function getC3317(): ?bool
    {
        return $this->c3317;
    }

    public function setC3317(?bool $c3317): self
    {
        $this->c3317 = $c3317;

        return $this;
    }

    public function getC3318(): ?bool
    {
        return $this->c3318;
    }

    public function setC3318(?bool $c3318): self
    {
        $this->c3318 = $c3318;

        return $this;
    }

    public function getC3319(): ?bool
    {
        return $this->c3319;
    }

    public function setC3319(?bool $c3319): self
    {
        $this->c3319 = $c3319;

        return $this;
    }

    public function getC3320(): ?bool
    {
        return $this->c3320;
    }

    public function setC3320(?bool $c3320): self
    {
        $this->c3320 = $c3320;

        return $this;
    }

    public function getC3321(): ?bool
    {
        return $this->c3321;
    }

    public function setC3321(?bool $c3321): self
    {
        $this->c3321 = $c3321;

        return $this;
    }

    public function getC3322(): ?bool
    {
        return $this->c3322;
    }

    public function setC3322(?bool $c3322): self
    {
        $this->c3322 = $c3322;

        return $this;
    }

    public function getC3323(): ?bool
    {
        return $this->c3323;
    }

    public function setC3323(?bool $c3323): self
    {
        $this->c3323 = $c3323;

        return $this;
    }

    public function getC3324(): ?bool
    {
        return $this->c3324;
    }

    public function setC3324(?bool $c3324): self
    {
        $this->c3324 = $c3324;

        return $this;
    }

    public function getC3325(): ?bool
    {
        return $this->c3325;
    }

    public function setC3325(?bool $c3325): self
    {
        $this->c3325 = $c3325;

        return $this;
    }

    public function getC3326(): ?bool
    {
        return $this->c3326;
    }

    public function setC3326(?bool $c3326): self
    {
        $this->c3326 = $c3326;

        return $this;
    }

    public function getC3327(): ?bool
    {
        return $this->c3327;
    }

    public function setC3327(?bool $c3327): self
    {
        $this->c3327 = $c3327;

        return $this;
    }

    public function getC3328(): ?bool
    {
        return $this->c3328;
    }

    public function setC3328(?bool $c3328): self
    {
        $this->c3328 = $c3328;

        return $this;
    }

    public function getC3329(): ?bool
    {
        return $this->c3329;
    }

    public function setC3329(?bool $c3329): self
    {
        $this->c3329 = $c3329;

        return $this;
    }

    public function getC3330(): ?bool
    {
        return $this->c3330;
    }

    public function setC3330(?bool $c3330): self
    {
        $this->c3330 = $c3330;

        return $this;
    }

    public function getC3331(): ?bool
    {
        return $this->c3331;
    }

    public function setC3331(?bool $c3331): self
    {
        $this->c3331 = $c3331;

        return $this;
    }

    public function getC3332(): ?bool
    {
        return $this->c3332;
    }

    public function setC3332(?bool $c3332): self
    {
        $this->c3332 = $c3332;

        return $this;
    }

    public function getC3333(): ?bool
    {
        return $this->c3333;
    }

    public function setC3333(?bool $c3333): self
    {
        $this->c3333 = $c3333;

        return $this;
    }

    public function getC3410(): ?bool
    {
        return $this->c3410;
    }

    public function setC3410(?bool $c3410): self
    {
        $this->c3410 = $c3410;

        return $this;
    }

    public function getC3411(): ?bool
    {
        return $this->c3411;
    }

    public function setC3411(?bool $c3411): self
    {
        $this->c3411 = $c3411;

        return $this;
    }

    public function getC3412(): ?bool
    {
        return $this->c3412;
    }

    public function setC3412(?bool $c3412): self
    {
        $this->c3412 = $c3412;

        return $this;
    }

    public function getC3413(): ?bool
    {
        return $this->c3413;
    }

    public function setC3413(?bool $c3413): self
    {
        $this->c3413 = $c3413;

        return $this;
    }

    public function getC3414(): ?bool
    {
        return $this->c3414;
    }

    public function setC3414(?bool $c3414): self
    {
        $this->c3414 = $c3414;

        return $this;
    }

    public function getC3415(): ?bool
    {
        return $this->c3415;
    }

    public function setC3415(?bool $c3415): self
    {
        $this->c3415 = $c3415;

        return $this;
    }

    public function getC3416(): ?bool
    {
        return $this->c3416;
    }

    public function setC3416(?bool $c3416): self
    {
        $this->c3416 = $c3416;

        return $this;
    }

    public function getC3417(): ?bool
    {
        return $this->c3417;
    }

    public function setC3417(?bool $c3417): self
    {
        $this->c3417 = $c3417;

        return $this;
    }

    public function getC3418(): ?bool
    {
        return $this->c3418;
    }

    public function setC3418(?bool $c3418): self
    {
        $this->c3418 = $c3418;

        return $this;
    }

    public function getC3419(): ?bool
    {
        return $this->c3419;
    }

    public function setC3419(?bool $c3419): self
    {
        $this->c3419 = $c3419;

        return $this;
    }

    public function getC3420(): ?bool
    {
        return $this->c3420;
    }

    public function setC3420(?bool $c3420): self
    {
        $this->c3420 = $c3420;

        return $this;
    }

    public function getC3421(): ?bool
    {
        return $this->c3421;
    }

    public function setC3421(?bool $c3421): self
    {
        $this->c3421 = $c3421;

        return $this;
    }

    public function getC3422(): ?bool
    {
        return $this->c3422;
    }

    public function setC3422(?bool $c3422): self
    {
        $this->c3422 = $c3422;

        return $this;
    }

    public function getC3423(): ?bool
    {
        return $this->c3423;
    }

    public function setC3423(?bool $c3423): self
    {
        $this->c3423 = $c3423;

        return $this;
    }

    public function getC3424(): ?bool
    {
        return $this->c3424;
    }

    public function setC3424(?bool $c3424): self
    {
        $this->c3424 = $c3424;

        return $this;
    }

    public function getC3425(): ?bool
    {
        return $this->c3425;
    }

    public function setC3425(?bool $c3425): self
    {
        $this->c3425 = $c3425;

        return $this;
    }

    public function getC3426(): ?bool
    {
        return $this->c3426;
    }

    public function setC3426(?bool $c3426): self
    {
        $this->c3426 = $c3426;

        return $this;
    }

    public function getC3427(): ?bool
    {
        return $this->c3427;
    }

    public function setC3427(?bool $c3427): self
    {
        $this->c3427 = $c3427;

        return $this;
    }

    public function getC3428(): ?bool
    {
        return $this->c3428;
    }

    public function setC3428(?bool $c3428): self
    {
        $this->c3428 = $c3428;

        return $this;
    }

    public function getC3429(): ?bool
    {
        return $this->c3429;
    }

    public function setC3429(?bool $c3429): self
    {
        $this->c3429 = $c3429;

        return $this;
    }

    public function getC3430(): ?bool
    {
        return $this->c3430;
    }

    public function setC3430(?bool $c3430): self
    {
        $this->c3430 = $c3430;

        return $this;
    }

    public function getC3431(): ?bool
    {
        return $this->c3431;
    }

    public function setC3431(?bool $c3431): self
    {
        $this->c3431 = $c3431;

        return $this;
    }

    public function getC3432(): ?bool
    {
        return $this->c3432;
    }

    public function setC3432(?bool $c3432): self
    {
        $this->c3432 = $c3432;

        return $this;
    }

    public function getC3510(): ?bool
    {
        return $this->c3510;
    }

    public function setC3510(?bool $c3510): self
    {
        $this->c3510 = $c3510;

        return $this;
    }

    public function getC3511(): ?bool
    {
        return $this->c3511;
    }

    public function setC3511(?bool $c3511): self
    {
        $this->c3511 = $c3511;

        return $this;
    }

    public function getC3512(): ?bool
    {
        return $this->c3512;
    }

    public function setC3512(?bool $c3512): self
    {
        $this->c3512 = $c3512;

        return $this;
    }

    public function getC3513(): ?bool
    {
        return $this->c3513;
    }

    public function setC3513(?bool $c3513): self
    {
        $this->c3513 = $c3513;

        return $this;
    }

    public function getC3514(): ?bool
    {
        return $this->c3514;
    }

    public function setC3514(?bool $c3514): self
    {
        $this->c3514 = $c3514;

        return $this;
    }

    public function getC3515(): ?bool
    {
        return $this->c3515;
    }

    public function setC3515(?bool $c3515): self
    {
        $this->c3515 = $c3515;

        return $this;
    }

    public function getC3516(): ?bool
    {
        return $this->c3516;
    }

    public function setC3516(?bool $c3516): self
    {
        $this->c3516 = $c3516;

        return $this;
    }

    public function getC3517(): ?bool
    {
        return $this->c3517;
    }

    public function setC3517(?bool $c3517): self
    {
        $this->c3517 = $c3517;

        return $this;
    }

    public function getC3518(): ?bool
    {
        return $this->c3518;
    }

    public function setC3518(?bool $c3518): self
    {
        $this->c3518 = $c3518;

        return $this;
    }

    public function getC3519(): ?bool
    {
        return $this->c3519;
    }

    public function setC3519(?bool $c3519): self
    {
        $this->c3519 = $c3519;

        return $this;
    }

    public function getC3520(): ?bool
    {
        return $this->c3520;
    }

    public function setC3520(?bool $c3520): self
    {
        $this->c3520 = $c3520;

        return $this;
    }

    public function getC3521(): ?bool
    {
        return $this->c3521;
    }

    public function setC3521(?bool $c3521): self
    {
        $this->c3521 = $c3521;

        return $this;
    }

    public function getC3522(): ?bool
    {
        return $this->c3522;
    }

    public function setC3522(?bool $c3522): self
    {
        $this->c3522 = $c3522;

        return $this;
    }

    public function getC3523(): ?bool
    {
        return $this->c3523;
    }

    public function setC3523(?bool $c3523): self
    {
        $this->c3523 = $c3523;

        return $this;
    }

    public function getC3524(): ?bool
    {
        return $this->c3524;
    }

    public function setC3524(?bool $c3524): self
    {
        $this->c3524 = $c3524;

        return $this;
    }

    public function getC3525(): ?bool
    {
        return $this->c3525;
    }

    public function setC3525(?bool $c3525): self
    {
        $this->c3525 = $c3525;

        return $this;
    }

    public function getC3526(): ?bool
    {
        return $this->c3526;
    }

    public function setC3526(?bool $c3526): self
    {
        $this->c3526 = $c3526;

        return $this;
    }

    public function getC3527(): ?bool
    {
        return $this->c3527;
    }

    public function setC3527(?bool $c3527): self
    {
        $this->c3527 = $c3527;

        return $this;
    }

    public function getC3528(): ?bool
    {
        return $this->c3528;
    }

    public function setC3528(?bool $c3528): self
    {
        $this->c3528 = $c3528;

        return $this;
    }

    public function getC3529(): ?bool
    {
        return $this->c3529;
    }

    public function setC3529(?bool $c3529): self
    {
        $this->c3529 = $c3529;

        return $this;
    }

    public function getC3530(): ?bool
    {
        return $this->c3530;
    }

    public function setC3530(?bool $c3530): self
    {
        $this->c3530 = $c3530;

        return $this;
    }

    public function getC3531(): ?bool
    {
        return $this->c3531;
    }

    public function setC3531(?bool $c3531): self
    {
        $this->c3531 = $c3531;

        return $this;
    }

    public function getC3532(): ?bool
    {
        return $this->c3532;
    }

    public function setC3532(?bool $c3532): self
    {
        $this->c3532 = $c3532;

        return $this;
    }

    public function getC3610(): ?bool
    {
        return $this->c3610;
    }

    public function setC3610(?bool $c3610): self
    {
        $this->c3610 = $c3610;

        return $this;
    }

    public function getC3611(): ?bool
    {
        return $this->c3611;
    }

    public function setC3611(?bool $c3611): self
    {
        $this->c3611 = $c3611;

        return $this;
    }

    public function getC3612(): ?bool
    {
        return $this->c3612;
    }

    public function setC3612(?bool $c3612): self
    {
        $this->c3612 = $c3612;

        return $this;
    }

    public function getC3613(): ?bool
    {
        return $this->c3613;
    }

    public function setC3613(?bool $c3613): self
    {
        $this->c3613 = $c3613;

        return $this;
    }

    public function getC3614(): ?bool
    {
        return $this->c3614;
    }

    public function setC3614(?bool $c3614): self
    {
        $this->c3614 = $c3614;

        return $this;
    }

    public function getC3615(): ?bool
    {
        return $this->c3615;
    }

    public function setC3615(?bool $c3615): self
    {
        $this->c3615 = $c3615;

        return $this;
    }

    public function getC3616(): ?bool
    {
        return $this->c3616;
    }

    public function setC3616(?bool $c3616): self
    {
        $this->c3616 = $c3616;

        return $this;
    }

    public function getC3617(): ?bool
    {
        return $this->c3617;
    }

    public function setC3617(?bool $c3617): self
    {
        $this->c3617 = $c3617;

        return $this;
    }

    public function getC3618(): ?bool
    {
        return $this->c3618;
    }

    public function setC3618(?bool $c3618): self
    {
        $this->c3618 = $c3618;

        return $this;
    }

    public function getC3619(): ?bool
    {
        return $this->c3619;
    }

    public function setC3619(?bool $c3619): self
    {
        $this->c3619 = $c3619;

        return $this;
    }

    public function getC3620(): ?bool
    {
        return $this->c3620;
    }

    public function setC3620(?bool $c3620): self
    {
        $this->c3620 = $c3620;

        return $this;
    }

    public function getC3621(): ?bool
    {
        return $this->c3621;
    }

    public function setC3621(?bool $c3621): self
    {
        $this->c3621 = $c3621;

        return $this;
    }

    public function getC3710(): ?bool
    {
        return $this->c3710;
    }

    public function setC3710(?bool $c3710): self
    {
        $this->c3710 = $c3710;

        return $this;
    }

    public function getC3711(): ?bool
    {
        return $this->c3711;
    }

    public function setC3711(?bool $c3711): self
    {
        $this->c3711 = $c3711;

        return $this;
    }

    public function getC3712(): ?bool
    {
        return $this->c3712;
    }

    public function setC3712(?bool $c3712): self
    {
        $this->c3712 = $c3712;

        return $this;
    }

    public function getC3713(): ?bool
    {
        return $this->c3713;
    }

    public function setC3713(?bool $c3713): self
    {
        $this->c3713 = $c3713;

        return $this;
    }

    public function getC3714(): ?bool
    {
        return $this->c3714;
    }

    public function setC3714(?bool $c3714): self
    {
        $this->c3714 = $c3714;

        return $this;
    }

    public function getC3715(): ?bool
    {
        return $this->c3715;
    }

    public function setC3715(?bool $c3715): self
    {
        $this->c3715 = $c3715;

        return $this;
    }

    public function getC3716(): ?bool
    {
        return $this->c3716;
    }

    public function setC3716(?bool $c3716): self
    {
        $this->c3716 = $c3716;

        return $this;
    }

    public function getC3717(): ?bool
    {
        return $this->c3717;
    }

    public function setC3717(?bool $c3717): self
    {
        $this->c3717 = $c3717;

        return $this;
    }

    public function getC3718(): ?bool
    {
        return $this->c3718;
    }

    public function setC3718(?bool $c3718): self
    {
        $this->c3718 = $c3718;

        return $this;
    }

    public function getC3719(): ?bool
    {
        return $this->c3719;
    }

    public function setC3719(?bool $c3719): self
    {
        $this->c3719 = $c3719;

        return $this;
    }

    public function getC3810(): ?bool
    {
        return $this->c3810;
    }

    public function setC3810(?bool $c3810): self
    {
        $this->c3810 = $c3810;

        return $this;
    }

    public function getC3811(): ?bool
    {
        return $this->c3811;
    }

    public function setC3811(?bool $c3811): self
    {
        $this->c3811 = $c3811;

        return $this;
    }

    public function getC3812(): ?bool
    {
        return $this->c3812;
    }

    public function setC3812(?bool $c3812): self
    {
        $this->c3812 = $c3812;

        return $this;
    }

    public function getC3813(): ?bool
    {
        return $this->c3813;
    }

    public function setC3813(?bool $c3813): self
    {
        $this->c3813 = $c3813;

        return $this;
    }

    public function getC3814(): ?bool
    {
        return $this->c3814;
    }

    public function setC3814(?bool $c3814): self
    {
        $this->c3814 = $c3814;

        return $this;
    }

    public function getC3815(): ?bool
    {
        return $this->c3815;
    }

    public function setC3815(?bool $c3815): self
    {
        $this->c3815 = $c3815;

        return $this;
    }

    public function getC3816(): ?bool
    {
        return $this->c3816;
    }

    public function setC3816(?bool $c3816): self
    {
        $this->c3816 = $c3816;

        return $this;
    }

    public function getC3817(): ?bool
    {
        return $this->c3817;
    }

    public function setC3817(?bool $c3817): self
    {
        $this->c3817 = $c3817;

        return $this;
    }

    public function getC3818(): ?bool
    {
        return $this->c3818;
    }

    public function setC3818(?bool $c3818): self
    {
        $this->c3818 = $c3818;

        return $this;
    }

    public function getC3819(): ?bool
    {
        return $this->c3819;
    }

    public function setC3819(?bool $c3819): self
    {
        $this->c3819 = $c3819;

        return $this;
    }

    public function getC3820(): ?bool
    {
        return $this->c3820;
    }

    public function setC3820(?bool $c3820): self
    {
        $this->c3820 = $c3820;

        return $this;
    }

    public function getC3821(): ?bool
    {
        return $this->c3821;
    }

    public function setC3821(?bool $c3821): self
    {
        $this->c3821 = $c3821;

        return $this;
    }

    public function getC3822(): ?bool
    {
        return $this->c3822;
    }

    public function setC3822(?bool $c3822): self
    {
        $this->c3822 = $c3822;

        return $this;
    }

    public function getC3823(): ?bool
    {
        return $this->c3823;
    }

    public function setC3823(?bool $c3823): self
    {
        $this->c3823 = $c3823;

        return $this;
    }

    public function getC3824(): ?bool
    {
        return $this->c3824;
    }

    public function setC3824(?bool $c3824): self
    {
        $this->c3824 = $c3824;

        return $this;
    }

    public function getC3825(): ?bool
    {
        return $this->c3825;
    }

    public function setC3825(?bool $c3825): self
    {
        $this->c3825 = $c3825;

        return $this;
    }

    public function getC3826(): ?bool
    {
        return $this->c3826;
    }

    public function setC3826(?bool $c3826): self
    {
        $this->c3826 = $c3826;

        return $this;
    }

    public function getC3827(): ?bool
    {
        return $this->c3827;
    }

    public function setC3827(?bool $c3827): self
    {
        $this->c3827 = $c3827;

        return $this;
    }

    public function getC3828(): ?bool
    {
        return $this->c3828;
    }

    public function setC3828(?bool $c3828): self
    {
        $this->c3828 = $c3828;

        return $this;
    }

    public function getC3829(): ?bool
    {
        return $this->c3829;
    }

    public function setC3829(?bool $c3829): self
    {
        $this->c3829 = $c3829;

        return $this;
    }

    public function getC3830(): ?bool
    {
        return $this->c3830;
    }

    public function setC3830(?bool $c3830): self
    {
        $this->c3830 = $c3830;

        return $this;
    }

    public function getC3831(): ?bool
    {
        return $this->c3831;
    }

    public function setC3831(?bool $c3831): self
    {
        $this->c3831 = $c3831;

        return $this;
    }

    public function getC3910(): ?bool
    {
        return $this->c3910;
    }

    public function setC3910(?bool $c3910): self
    {
        $this->c3910 = $c3910;

        return $this;
    }

    public function getC3911(): ?bool
    {
        return $this->c3911;
    }

    public function setC3911(?bool $c3911): self
    {
        $this->c3911 = $c3911;

        return $this;
    }

    public function getC3912(): ?bool
    {
        return $this->c3912;
    }

    public function setC3912(?bool $c3912): self
    {
        $this->c3912 = $c3912;

        return $this;
    }

    public function getC3913(): ?bool
    {
        return $this->c3913;
    }

    public function setC3913(?bool $c3913): self
    {
        $this->c3913 = $c3913;

        return $this;
    }

    public function getC3914(): ?bool
    {
        return $this->c3914;
    }

    public function setC3914(?bool $c3914): self
    {
        $this->c3914 = $c3914;

        return $this;
    }

    public function getC3915(): ?bool
    {
        return $this->c3915;
    }

    public function setC3915(?bool $c3915): self
    {
        $this->c3915 = $c3915;

        return $this;
    }

    public function getC3916(): ?bool
    {
        return $this->c3916;
    }

    public function setC3916(?bool $c3916): self
    {
        $this->c3916 = $c3916;

        return $this;
    }

    public function getC3917(): ?bool
    {
        return $this->c3917;
    }

    public function setC3917(?bool $c3917): self
    {
        $this->c3917 = $c3917;

        return $this;
    }

    public function getC3918(): ?bool
    {
        return $this->c3918;
    }

    public function setC3918(?bool $c3918): self
    {
        $this->c3918 = $c3918;

        return $this;
    }

    public function getC3919(): ?bool
    {
        return $this->c3919;
    }

    public function setC3919(?bool $c3919): self
    {
        $this->c3919 = $c3919;

        return $this;
    }

    public function getC3920(): ?bool
    {
        return $this->c3920;
    }

    public function setC3920(?bool $c3920): self
    {
        $this->c3920 = $c3920;

        return $this;
    }

    public function getC3921(): ?bool
    {
        return $this->c3921;
    }

    public function setC3921(?bool $c3921): self
    {
        $this->c3921 = $c3921;

        return $this;
    }

    public function getC3922(): ?bool
    {
        return $this->c3922;
    }

    public function setC3922(?bool $c3922): self
    {
        $this->c3922 = $c3922;

        return $this;
    }

    public function getC3923(): ?bool
    {
        return $this->c3923;
    }

    public function setC3923(?bool $c3923): self
    {
        $this->c3923 = $c3923;

        return $this;
    }

    public function getC3924(): ?bool
    {
        return $this->c3924;
    }

    public function setC3924(?bool $c3924): self
    {
        $this->c3924 = $c3924;

        return $this;
    }

    public function getC3925(): ?bool
    {
        return $this->c3925;
    }

    public function setC3925(?bool $c3925): self
    {
        $this->c3925 = $c3925;

        return $this;
    }

    public function getC3926(): ?bool
    {
        return $this->c3926;
    }

    public function setC3926(?bool $c3926): self
    {
        $this->c3926 = $c3926;

        return $this;
    }

    public function getC3927(): ?bool
    {
        return $this->c3927;
    }

    public function setC3927(?bool $c3927): self
    {
        $this->c3927 = $c3927;

        return $this;
    }

    public function getC3928(): ?bool
    {
        return $this->c3928;
    }

    public function setC3928(?bool $c3928): self
    {
        $this->c3928 = $c3928;

        return $this;
    }

    public function getC3929(): ?bool
    {
        return $this->c3929;
    }

    public function setC3929(?bool $c3929): self
    {
        $this->c3929 = $c3929;

        return $this;
    }

    public function getC3930(): ?bool
    {
        return $this->c3930;
    }

    public function setC3930(?bool $c3930): self
    {
        $this->c3930 = $c3930;

        return $this;
    }

    public function getC3931(): ?bool
    {
        return $this->c3931;
    }

    public function setC3931(?bool $c3931): self
    {
        $this->c3931 = $c3931;

        return $this;
    }

    public function getC30310(): ?bool
    {
        return $this->c30310;
    }

    public function setC30310(?bool $c30310): self
    {
        $this->c30310 = $c30310;

        return $this;
    }

    public function getC30311(): ?bool
    {
        return $this->c30311;
    }

    public function setC30311(?bool $c30311): self
    {
        $this->c30311 = $c30311;

        return $this;
    }

    public function getC30312(): ?bool
    {
        return $this->c30312;
    }

    public function setC30312(?bool $c30312): self
    {
        $this->c30312 = $c30312;

        return $this;
    }

    public function getC30313(): ?bool
    {
        return $this->c30313;
    }

    public function setC30313(?bool $c30313): self
    {
        $this->c30313 = $c30313;

        return $this;
    }

    public function getC30314(): ?bool
    {
        return $this->c30314;
    }

    public function setC30314(?bool $c30314): self
    {
        $this->c30314 = $c30314;

        return $this;
    }

    public function getC30315(): ?bool
    {
        return $this->c30315;
    }

    public function setC30315(?bool $c30315): self
    {
        $this->c30315 = $c30315;

        return $this;
    }

    public function getC30316(): ?bool
    {
        return $this->c30316;
    }

    public function setC30316(?bool $c30316): self
    {
        $this->c30316 = $c30316;

        return $this;
    }

    public function getC30317(): ?bool
    {
        return $this->c30317;
    }

    public function setC30317(?bool $c30317): self
    {
        $this->c30317 = $c30317;

        return $this;
    }

    public function getC30318(): ?bool
    {
        return $this->c30318;
    }

    public function setC30318(?bool $c30318): self
    {
        $this->c30318 = $c30318;

        return $this;
    }

    public function getC30319(): ?bool
    {
        return $this->c30319;
    }

    public function setC30319(?bool $c30319): self
    {
        $this->c30319 = $c30319;

        return $this;
    }

    public function getC30320(): ?bool
    {
        return $this->c30320;
    }

    public function setC30320(?bool $c30320): self
    {
        $this->c30320 = $c30320;

        return $this;
    }

    public function getC30321(): ?bool
    {
        return $this->c30321;
    }

    public function setC30321(?bool $c30321): self
    {
        $this->c30321 = $c30321;

        return $this;
    }

    public function getC30322(): ?bool
    {
        return $this->c30322;
    }

    public function setC30322(?bool $c30322): self
    {
        $this->c30322 = $c30322;

        return $this;
    }

    public function getC30323(): ?bool
    {
        return $this->c30323;
    }

    public function setC30323(?bool $c30323): self
    {
        $this->c30323 = $c30323;

        return $this;
    }

    public function getC30324(): ?bool
    {
        return $this->c30324;
    }

    public function setC30324(?bool $c30324): self
    {
        $this->c30324 = $c30324;

        return $this;
    }

    public function getC30325(): ?bool
    {
        return $this->c30325;
    }

    public function setC30325(?bool $c30325): self
    {
        $this->c30325 = $c30325;

        return $this;
    }

    public function getC30326(): ?bool
    {
        return $this->c30326;
    }

    public function setC30326(?bool $c30326): self
    {
        $this->c30326 = $c30326;

        return $this;
    }

    public function getC30327(): ?bool
    {
        return $this->c30327;
    }

    public function setC30327(?bool $c30327): self
    {
        $this->c30327 = $c30327;

        return $this;
    }

    public function getC30328(): ?bool
    {
        return $this->c30328;
    }

    public function setC30328(?bool $c30328): self
    {
        $this->c30328 = $c30328;

        return $this;
    }

    public function getC30329(): ?bool
    {
        return $this->c30329;
    }

    public function setC30329(?bool $c30329): self
    {
        $this->c30329 = $c30329;

        return $this;
    }

    public function getC30330(): ?bool
    {
        return $this->c30330;
    }

    public function setC30330(?bool $c30330): self
    {
        $this->c30330 = $c30330;

        return $this;
    }

    public function getC30331(): ?bool
    {
        return $this->c30331;
    }

    public function setC30331(?bool $c30331): self
    {
        $this->c30331 = $c30331;

        return $this;
    }

    public function getC30332(): ?bool
    {
        return $this->c30332;
    }

    public function setC30332(?bool $c30332): self
    {
        $this->c30332 = $c30332;

        return $this;
    }

    public function getC30333(): ?bool
    {
        return $this->c30333;
    }

    public function setC30333(?bool $c30333): self
    {
        $this->c30333 = $c30333;

        return $this;
    }

    public function getC30410(): ?bool
    {
        return $this->c30410;
    }

    public function setC30410(?bool $c30410): self
    {
        $this->c30410 = $c30410;

        return $this;
    }

    public function getC30411(): ?bool
    {
        return $this->c30411;
    }

    public function setC30411(?bool $c30411): self
    {
        $this->c30411 = $c30411;

        return $this;
    }

    public function getC30412(): ?bool
    {
        return $this->c30412;
    }

    public function setC30412(?bool $c30412): self
    {
        $this->c30412 = $c30412;

        return $this;
    }

    public function getC30413(): ?bool
    {
        return $this->c30413;
    }

    public function setC30413(?bool $c30413): self
    {
        $this->c30413 = $c30413;

        return $this;
    }

    public function getC30414(): ?bool
    {
        return $this->c30414;
    }

    public function setC30414(?bool $c30414): self
    {
        $this->c30414 = $c30414;

        return $this;
    }

    public function getC30415(): ?bool
    {
        return $this->c30415;
    }

    public function setC30415(?bool $c30415): self
    {
        $this->c30415 = $c30415;

        return $this;
    }

    public function getC30416(): ?bool
    {
        return $this->c30416;
    }

    public function setC30416(?bool $c30416): self
    {
        $this->c30416 = $c30416;

        return $this;
    }

    public function getC30417(): ?bool
    {
        return $this->c30417;
    }

    public function setC30417(?bool $c30417): self
    {
        $this->c30417 = $c30417;

        return $this;
    }

    public function getC30418(): ?bool
    {
        return $this->c30418;
    }

    public function setC30418(?bool $c30418): self
    {
        $this->c30418 = $c30418;

        return $this;
    }

    public function getC30419(): ?bool
    {
        return $this->c30419;
    }

    public function setC30419(?bool $c30419): self
    {
        $this->c30419 = $c30419;

        return $this;
    }

    public function getC30420(): ?bool
    {
        return $this->c30420;
    }

    public function setC30420(?bool $c30420): self
    {
        $this->c30420 = $c30420;

        return $this;
    }

    public function getC30421(): ?bool
    {
        return $this->c30421;
    }

    public function setC30421(?bool $c30421): self
    {
        $this->c30421 = $c30421;

        return $this;
    }

    public function getC30422(): ?bool
    {
        return $this->c30422;
    }

    public function setC30422(?bool $c30422): self
    {
        $this->c30422 = $c30422;

        return $this;
    }

    public function getC30423(): ?bool
    {
        return $this->c30423;
    }

    public function setC30423(?bool $c30423): self
    {
        $this->c30423 = $c30423;

        return $this;
    }

    public function getC30424(): ?bool
    {
        return $this->c30424;
    }

    public function setC30424(?bool $c30424): self
    {
        $this->c30424 = $c30424;

        return $this;
    }

    public function getC30425(): ?bool
    {
        return $this->c30425;
    }

    public function setC30425(?bool $c30425): self
    {
        $this->c30425 = $c30425;

        return $this;
    }

    public function getC30426(): ?bool
    {
        return $this->c30426;
    }

    public function setC30426(?bool $c30426): self
    {
        $this->c30426 = $c30426;

        return $this;
    }

    public function getC30427(): ?bool
    {
        return $this->c30427;
    }

    public function setC30427(?bool $c30427): self
    {
        $this->c30427 = $c30427;

        return $this;
    }

    public function getC30428(): ?bool
    {
        return $this->c30428;
    }

    public function setC30428(?bool $c30428): self
    {
        $this->c30428 = $c30428;

        return $this;
    }

    public function getC30429(): ?bool
    {
        return $this->c30429;
    }

    public function setC30429(?bool $c30429): self
    {
        $this->c30429 = $c30429;

        return $this;
    }

    public function getC30430(): ?bool
    {
        return $this->c30430;
    }

    public function setC30430(?bool $c30430): self
    {
        $this->c30430 = $c30430;

        return $this;
    }

    public function getC30431(): ?bool
    {
        return $this->c30431;
    }

    public function setC30431(?bool $c30431): self
    {
        $this->c30431 = $c30431;

        return $this;
    }

    public function getC30432(): ?bool
    {
        return $this->c30432;
    }

    public function setC30432(?bool $c30432): self
    {
        $this->c30432 = $c30432;

        return $this;
    }

    public function getC30510(): ?bool
    {
        return $this->c30510;
    }

    public function setC30510(?bool $c30510): self
    {
        $this->c30510 = $c30510;

        return $this;
    }

    public function getC30511(): ?bool
    {
        return $this->c30511;
    }

    public function setC30511(?bool $c30511): self
    {
        $this->c30511 = $c30511;

        return $this;
    }

    public function getC30610(): ?bool
    {
        return $this->c30610;
    }

    public function setC30610(?bool $c30610): self
    {
        $this->c30610 = $c30610;

        return $this;
    }

    public function getC30611(): ?bool
    {
        return $this->c30611;
    }

    public function setC30611(?bool $c30611): self
    {
        $this->c30611 = $c30611;

        return $this;
    }

    public function getC30612(): ?bool
    {
        return $this->c30612;
    }

    public function setC30612(?bool $c30612): self
    {
        $this->c30612 = $c30612;

        return $this;
    }

    public function getC30613(): ?bool
    {
        return $this->c30613;
    }

    public function setC30613(?bool $c30613): self
    {
        $this->c30613 = $c30613;

        return $this;
    }

    public function getC30710(): ?bool
    {
        return $this->c30710;
    }

    public function setC30710(?bool $c30710): self
    {
        $this->c30710 = $c30710;

        return $this;
    }

    public function getC30711(): ?bool
    {
        return $this->c30711;
    }

    public function setC30711(?bool $c30711): self
    {
        $this->c30711 = $c30711;

        return $this;
    }

    public function getC30712(): ?bool
    {
        return $this->c30712;
    }

    public function setC30712(?bool $c30712): self
    {
        $this->c30712 = $c30712;

        return $this;
    }

    public function getC30713(): ?bool
    {
        return $this->c30713;
    }

    public function setC30713(?bool $c30713): self
    {
        $this->c30713 = $c30713;

        return $this;
    }

    public function getC4000(): ?bool
    {
        return $this->c4000;
    }

    public function setC4000(?bool $c4000): self
    {
        $this->c4000 = $c4000;

        return $this;
    }

    public function getC4001(): ?bool
    {
        return $this->c4001;
    }

    public function setC4001(?bool $c4001): self
    {
        $this->c4001 = $c4001;

        return $this;
    }

    public function getC4010(): ?bool
    {
        return $this->c4010;
    }

    public function setC4010(?bool $c4010): self
    {
        $this->c4010 = $c4010;

        return $this;
    }

    public function getC4011(): ?bool
    {
        return $this->c4011;
    }

    public function setC4011(?bool $c4011): self
    {
        $this->c4011 = $c4011;

        return $this;
    }

    public function getC4012(): ?bool
    {
        return $this->c4012;
    }

    public function setC4012(?bool $c4012): self
    {
        $this->c4012 = $c4012;

        return $this;
    }

    public function getC4013(): ?bool
    {
        return $this->c4013;
    }

    public function setC4013(?bool $c4013): self
    {
        $this->c4013 = $c4013;

        return $this;
    }

    public function getC4014(): ?bool
    {
        return $this->c4014;
    }

    public function setC4014(?bool $c4014): self
    {
        $this->c4014 = $c4014;

        return $this;
    }

    public function getC4015(): ?bool
    {
        return $this->c4015;
    }

    public function setC4015(?bool $c4015): self
    {
        $this->c4015 = $c4015;

        return $this;
    }

    public function getC4016(): ?bool
    {
        return $this->c4016;
    }

    public function setC4016(?bool $c4016): self
    {
        $this->c4016 = $c4016;

        return $this;
    }

    public function getC4017(): ?bool
    {
        return $this->c4017;
    }

    public function setC4017(?bool $c4017): self
    {
        $this->c4017 = $c4017;

        return $this;
    }

    public function getC4018(): ?bool
    {
        return $this->c4018;
    }

    public function setC4018(?bool $c4018): self
    {
        $this->c4018 = $c4018;

        return $this;
    }

    public function getC4019(): ?bool
    {
        return $this->c4019;
    }

    public function setC4019(?bool $c4019): self
    {
        $this->c4019 = $c4019;

        return $this;
    }

    public function getC4020(): ?bool
    {
        return $this->c4020;
    }

    public function setC4020(?bool $c4020): self
    {
        $this->c4020 = $c4020;

        return $this;
    }

    public function getC4021(): ?bool
    {
        return $this->c4021;
    }

    public function setC4021(?bool $c4021): self
    {
        $this->c4021 = $c4021;

        return $this;
    }

    public function getC4022(): ?bool
    {
        return $this->c4022;
    }

    public function setC4022(?bool $c4022): self
    {
        $this->c4022 = $c4022;

        return $this;
    }

    public function getC4023(): ?bool
    {
        return $this->c4023;
    }

    public function setC4023(?bool $c4023): self
    {
        $this->c4023 = $c4023;

        return $this;
    }

    public function getC4024(): ?bool
    {
        return $this->c4024;
    }

    public function setC4024(?bool $c4024): self
    {
        $this->c4024 = $c4024;

        return $this;
    }

    public function getC4025(): ?bool
    {
        return $this->c4025;
    }

    public function setC4025(?bool $c4025): self
    {
        $this->c4025 = $c4025;

        return $this;
    }

    public function getC4026(): ?bool
    {
        return $this->c4026;
    }

    public function setC4026(?bool $c4026): self
    {
        $this->c4026 = $c4026;

        return $this;
    }

    public function getC4027(): ?bool
    {
        return $this->c4027;
    }

    public function setC4027(?bool $c4027): self
    {
        $this->c4027 = $c4027;

        return $this;
    }

    public function getC4028(): ?bool
    {
        return $this->c4028;
    }

    public function setC4028(?bool $c4028): self
    {
        $this->c4028 = $c4028;

        return $this;
    }

    public function getC4110(): ?bool
    {
        return $this->c4110;
    }

    public function setC4110(?bool $c4110): self
    {
        $this->c4110 = $c4110;

        return $this;
    }

    public function getC4111(): ?bool
    {
        return $this->c4111;
    }

    public function setC4111(?bool $c4111): self
    {
        $this->c4111 = $c4111;

        return $this;
    }

    public function getC4112(): ?bool
    {
        return $this->c4112;
    }

    public function setC4112(?bool $c4112): self
    {
        $this->c4112 = $c4112;

        return $this;
    }

    public function getC4113(): ?bool
    {
        return $this->c4113;
    }

    public function setC4113(?bool $c4113): self
    {
        $this->c4113 = $c4113;

        return $this;
    }

    public function getC4114(): ?bool
    {
        return $this->c4114;
    }

    public function setC4114(?bool $c4114): self
    {
        $this->c4114 = $c4114;

        return $this;
    }

    public function getC4115(): ?bool
    {
        return $this->c4115;
    }

    public function setC4115(?bool $c4115): self
    {
        $this->c4115 = $c4115;

        return $this;
    }

    public function getC4116(): ?bool
    {
        return $this->c4116;
    }

    public function setC4116(?bool $c4116): self
    {
        $this->c4116 = $c4116;

        return $this;
    }

    public function getC4117(): ?bool
    {
        return $this->c4117;
    }

    public function setC4117(?bool $c4117): self
    {
        $this->c4117 = $c4117;

        return $this;
    }

    public function getC4118(): ?bool
    {
        return $this->c4118;
    }

    public function setC4118(?bool $c4118): self
    {
        $this->c4118 = $c4118;

        return $this;
    }

    public function getC4119(): ?bool
    {
        return $this->c4119;
    }

    public function setC4119(?bool $c4119): self
    {
        $this->c4119 = $c4119;

        return $this;
    }

    public function getC4120(): ?bool
    {
        return $this->c4120;
    }

    public function setC4120(?bool $c4120): self
    {
        $this->c4120 = $c4120;

        return $this;
    }

    public function getC4121(): ?bool
    {
        return $this->c4121;
    }

    public function setC4121(?bool $c4121): self
    {
        $this->c4121 = $c4121;

        return $this;
    }

    public function getC4122(): ?bool
    {
        return $this->c4122;
    }

    public function setC4122(?bool $c4122): self
    {
        $this->c4122 = $c4122;

        return $this;
    }

    public function getC4123(): ?bool
    {
        return $this->c4123;
    }

    public function setC4123(?bool $c4123): self
    {
        $this->c4123 = $c4123;

        return $this;
    }

    public function getC4124(): ?bool
    {
        return $this->c4124;
    }

    public function setC4124(?bool $c4124): self
    {
        $this->c4124 = $c4124;

        return $this;
    }

    public function getC4125(): ?bool
    {
        return $this->c4125;
    }

    public function setC4125(?bool $c4125): self
    {
        $this->c4125 = $c4125;

        return $this;
    }

    public function getC4126(): ?bool
    {
        return $this->c4126;
    }

    public function setC4126(?bool $c4126): self
    {
        $this->c4126 = $c4126;

        return $this;
    }

    public function getC4127(): ?bool
    {
        return $this->c4127;
    }

    public function setC4127(?bool $c4127): self
    {
        $this->c4127 = $c4127;

        return $this;
    }

    public function getC4128(): ?bool
    {
        return $this->c4128;
    }

    public function setC4128(?bool $c4128): self
    {
        $this->c4128 = $c4128;

        return $this;
    }

    public function getC4210(): ?bool
    {
        return $this->c4210;
    }

    public function setC4210(?bool $c4210): self
    {
        $this->c4210 = $c4210;

        return $this;
    }

    public function getC4211(): ?bool
    {
        return $this->c4211;
    }

    public function setC4211(?bool $c4211): self
    {
        $this->c4211 = $c4211;

        return $this;
    }

    public function getC4212(): ?bool
    {
        return $this->c4212;
    }

    public function setC4212(?bool $c4212): self
    {
        $this->c4212 = $c4212;

        return $this;
    }

    public function getC4213(): ?bool
    {
        return $this->c4213;
    }

    public function setC4213(?bool $c4213): self
    {
        $this->c4213 = $c4213;

        return $this;
    }

    public function getC4214(): ?bool
    {
        return $this->c4214;
    }

    public function setC4214(?bool $c4214): self
    {
        $this->c4214 = $c4214;

        return $this;
    }

    public function getC4215(): ?bool
    {
        return $this->c4215;
    }

    public function setC4215(?bool $c4215): self
    {
        $this->c4215 = $c4215;

        return $this;
    }

    public function getC4216(): ?bool
    {
        return $this->c4216;
    }

    public function setC4216(?bool $c4216): self
    {
        $this->c4216 = $c4216;

        return $this;
    }

    public function getC4217(): ?bool
    {
        return $this->c4217;
    }

    public function setC4217(?bool $c4217): self
    {
        $this->c4217 = $c4217;

        return $this;
    }

    public function getC4218(): ?bool
    {
        return $this->c4218;
    }

    public function setC4218(?bool $c4218): self
    {
        $this->c4218 = $c4218;

        return $this;
    }

    public function getC4219(): ?bool
    {
        return $this->c4219;
    }

    public function setC4219(?bool $c4219): self
    {
        $this->c4219 = $c4219;

        return $this;
    }

    public function getC4220(): ?bool
    {
        return $this->c4220;
    }

    public function setC4220(?bool $c4220): self
    {
        $this->c4220 = $c4220;

        return $this;
    }

    public function getC4221(): ?bool
    {
        return $this->c4221;
    }

    public function setC4221(?bool $c4221): self
    {
        $this->c4221 = $c4221;

        return $this;
    }

    public function getC4222(): ?bool
    {
        return $this->c4222;
    }

    public function setC4222(?bool $c4222): self
    {
        $this->c4222 = $c4222;

        return $this;
    }

    public function getC4223(): ?bool
    {
        return $this->c4223;
    }

    public function setC4223(?bool $c4223): self
    {
        $this->c4223 = $c4223;

        return $this;
    }

    public function getC4224(): ?bool
    {
        return $this->c4224;
    }

    public function setC4224(?bool $c4224): self
    {
        $this->c4224 = $c4224;

        return $this;
    }

    public function getC4225(): ?bool
    {
        return $this->c4225;
    }

    public function setC4225(?bool $c4225): self
    {
        $this->c4225 = $c4225;

        return $this;
    }

    public function getC4226(): ?bool
    {
        return $this->c4226;
    }

    public function setC4226(?bool $c4226): self
    {
        $this->c4226 = $c4226;

        return $this;
    }

    public function getC4227(): ?bool
    {
        return $this->c4227;
    }

    public function setC4227(?bool $c4227): self
    {
        $this->c4227 = $c4227;

        return $this;
    }

    public function getC4228(): ?bool
    {
        return $this->c4228;
    }

    public function setC4228(?bool $c4228): self
    {
        $this->c4228 = $c4228;

        return $this;
    }

    public function getC4310(): ?bool
    {
        return $this->c4310;
    }

    public function setC4310(?bool $c4310): self
    {
        $this->c4310 = $c4310;

        return $this;
    }

    public function getC4311(): ?bool
    {
        return $this->c4311;
    }

    public function setC4311(?bool $c4311): self
    {
        $this->c4311 = $c4311;

        return $this;
    }

    public function getC4312(): ?bool
    {
        return $this->c4312;
    }

    public function setC4312(?bool $c4312): self
    {
        $this->c4312 = $c4312;

        return $this;
    }

    public function getC4313(): ?bool
    {
        return $this->c4313;
    }

    public function setC4313(?bool $c4313): self
    {
        $this->c4313 = $c4313;

        return $this;
    }

    public function getC4314(): ?bool
    {
        return $this->c4314;
    }

    public function setC4314(?bool $c4314): self
    {
        $this->c4314 = $c4314;

        return $this;
    }

    public function getC4315(): ?bool
    {
        return $this->c4315;
    }

    public function setC4315(?bool $c4315): self
    {
        $this->c4315 = $c4315;

        return $this;
    }

    public function getC4316(): ?bool
    {
        return $this->c4316;
    }

    public function setC4316(?bool $c4316): self
    {
        $this->c4316 = $c4316;

        return $this;
    }

    public function getC4317(): ?bool
    {
        return $this->c4317;
    }

    public function setC4317(?bool $c4317): self
    {
        $this->c4317 = $c4317;

        return $this;
    }

    public function getC4318(): ?bool
    {
        return $this->c4318;
    }

    public function setC4318(?bool $c4318): self
    {
        $this->c4318 = $c4318;

        return $this;
    }

    public function getC4319(): ?bool
    {
        return $this->c4319;
    }

    public function setC4319(?bool $c4319): self
    {
        $this->c4319 = $c4319;

        return $this;
    }

    public function getC4320(): ?bool
    {
        return $this->c4320;
    }

    public function setC4320(?bool $c4320): self
    {
        $this->c4320 = $c4320;

        return $this;
    }

    public function getC4321(): ?bool
    {
        return $this->c4321;
    }

    public function setC4321(?bool $c4321): self
    {
        $this->c4321 = $c4321;

        return $this;
    }

    public function getC4322(): ?bool
    {
        return $this->c4322;
    }

    public function setC4322(?bool $c4322): self
    {
        $this->c4322 = $c4322;

        return $this;
    }

    public function getC4323(): ?bool
    {
        return $this->c4323;
    }

    public function setC4323(?bool $c4323): self
    {
        $this->c4323 = $c4323;

        return $this;
    }

    public function getC4324(): ?bool
    {
        return $this->c4324;
    }

    public function setC4324(?bool $c4324): self
    {
        $this->c4324 = $c4324;

        return $this;
    }

    public function getC4325(): ?bool
    {
        return $this->c4325;
    }

    public function setC4325(?bool $c4325): self
    {
        $this->c4325 = $c4325;

        return $this;
    }

    public function getC4326(): ?bool
    {
        return $this->c4326;
    }

    public function setC4326(?bool $c4326): self
    {
        $this->c4326 = $c4326;

        return $this;
    }

    public function getC4327(): ?bool
    {
        return $this->c4327;
    }

    public function setC4327(?bool $c4327): self
    {
        $this->c4327 = $c4327;

        return $this;
    }

    public function getC4328(): ?bool
    {
        return $this->c4328;
    }

    public function setC4328(?bool $c4328): self
    {
        $this->c4328 = $c4328;

        return $this;
    }

    public function getC4329(): ?bool
    {
        return $this->c4329;
    }

    public function setC4329(?bool $c4329): self
    {
        $this->c4329 = $c4329;

        return $this;
    }

    public function getC4410(): ?bool
    {
        return $this->c4410;
    }

    public function setC4410(?bool $c4410): self
    {
        $this->c4410 = $c4410;

        return $this;
    }

    public function getC4411(): ?bool
    {
        return $this->c4411;
    }

    public function setC4411(?bool $c4411): self
    {
        $this->c4411 = $c4411;

        return $this;
    }

    public function getC4412(): ?bool
    {
        return $this->c4412;
    }

    public function setC4412(?bool $c4412): self
    {
        $this->c4412 = $c4412;

        return $this;
    }

    public function getC4413(): ?bool
    {
        return $this->c4413;
    }

    public function setC4413(?bool $c4413): self
    {
        $this->c4413 = $c4413;

        return $this;
    }

    public function getC4414(): ?bool
    {
        return $this->c4414;
    }

    public function setC4414(?bool $c4414): self
    {
        $this->c4414 = $c4414;

        return $this;
    }

    public function getC4415(): ?bool
    {
        return $this->c4415;
    }

    public function setC4415(?bool $c4415): self
    {
        $this->c4415 = $c4415;

        return $this;
    }

    public function getC4416(): ?bool
    {
        return $this->c4416;
    }

    public function setC4416(?bool $c4416): self
    {
        $this->c4416 = $c4416;

        return $this;
    }

    public function getC4417(): ?bool
    {
        return $this->c4417;
    }

    public function setC4417(?bool $c4417): self
    {
        $this->c4417 = $c4417;

        return $this;
    }

    public function getC4418(): ?bool
    {
        return $this->c4418;
    }

    public function setC4418(?bool $c4418): self
    {
        $this->c4418 = $c4418;

        return $this;
    }

    public function getC4419(): ?bool
    {
        return $this->c4419;
    }

    public function setC4419(?bool $c4419): self
    {
        $this->c4419 = $c4419;

        return $this;
    }

    public function getC4420(): ?bool
    {
        return $this->c4420;
    }

    public function setC4420(?bool $c4420): self
    {
        $this->c4420 = $c4420;

        return $this;
    }

    public function getC4421(): ?bool
    {
        return $this->c4421;
    }

    public function setC4421(?bool $c4421): self
    {
        $this->c4421 = $c4421;

        return $this;
    }

    public function getC4422(): ?bool
    {
        return $this->c4422;
    }

    public function setC4422(?bool $c4422): self
    {
        $this->c4422 = $c4422;

        return $this;
    }

    public function getC4423(): ?bool
    {
        return $this->c4423;
    }

    public function setC4423(?bool $c4423): self
    {
        $this->c4423 = $c4423;

        return $this;
    }

    public function getC4424(): ?bool
    {
        return $this->c4424;
    }

    public function setC4424(?bool $c4424): self
    {
        $this->c4424 = $c4424;

        return $this;
    }

    public function getC4425(): ?bool
    {
        return $this->c4425;
    }

    public function setC4425(?bool $c4425): self
    {
        $this->c4425 = $c4425;

        return $this;
    }

    public function getC4426(): ?bool
    {
        return $this->c4426;
    }

    public function setC4426(?bool $c4426): self
    {
        $this->c4426 = $c4426;

        return $this;
    }

    public function getC4427(): ?bool
    {
        return $this->c4427;
    }

    public function setC4427(?bool $c4427): self
    {
        $this->c4427 = $c4427;

        return $this;
    }

    public function getC4428(): ?bool
    {
        return $this->c4428;
    }

    public function setC4428(?bool $c4428): self
    {
        $this->c4428 = $c4428;

        return $this;
    }

    public function getC4510(): ?bool
    {
        return $this->c4510;
    }

    public function setC4510(?bool $c4510): self
    {
        $this->c4510 = $c4510;

        return $this;
    }

    public function getC4511(): ?bool
    {
        return $this->c4511;
    }

    public function setC4511(?bool $c4511): self
    {
        $this->c4511 = $c4511;

        return $this;
    }

    public function getC4512(): ?bool
    {
        return $this->c4512;
    }

    public function setC4512(?bool $c4512): self
    {
        $this->c4512 = $c4512;

        return $this;
    }

    public function getC4513(): ?bool
    {
        return $this->c4513;
    }

    public function setC4513(?bool $c4513): self
    {
        $this->c4513 = $c4513;

        return $this;
    }

    public function getC4514(): ?bool
    {
        return $this->c4514;
    }

    public function setC4514(?bool $c4514): self
    {
        $this->c4514 = $c4514;

        return $this;
    }

    public function getC4515(): ?bool
    {
        return $this->c4515;
    }

    public function setC4515(?bool $c4515): self
    {
        $this->c4515 = $c4515;

        return $this;
    }

    public function getC4516(): ?bool
    {
        return $this->c4516;
    }

    public function setC4516(?bool $c4516): self
    {
        $this->c4516 = $c4516;

        return $this;
    }

    public function getC4517(): ?bool
    {
        return $this->c4517;
    }

    public function setC4517(?bool $c4517): self
    {
        $this->c4517 = $c4517;

        return $this;
    }

    public function getC4518(): ?bool
    {
        return $this->c4518;
    }

    public function setC4518(?bool $c4518): self
    {
        $this->c4518 = $c4518;

        return $this;
    }

    public function getC4519(): ?bool
    {
        return $this->c4519;
    }

    public function setC4519(?bool $c4519): self
    {
        $this->c4519 = $c4519;

        return $this;
    }

    public function getC4520(): ?bool
    {
        return $this->c4520;
    }

    public function setC4520(?bool $c4520): self
    {
        $this->c4520 = $c4520;

        return $this;
    }

    public function getC4521(): ?bool
    {
        return $this->c4521;
    }

    public function setC4521(?bool $c4521): self
    {
        $this->c4521 = $c4521;

        return $this;
    }

    public function getC4522(): ?bool
    {
        return $this->c4522;
    }

    public function setC4522(?bool $c4522): self
    {
        $this->c4522 = $c4522;

        return $this;
    }

    public function getC4523(): ?bool
    {
        return $this->c4523;
    }

    public function setC4523(?bool $c4523): self
    {
        $this->c4523 = $c4523;

        return $this;
    }

    public function getC4524(): ?bool
    {
        return $this->c4524;
    }

    public function setC4524(?bool $c4524): self
    {
        $this->c4524 = $c4524;

        return $this;
    }

    public function getC4525(): ?bool
    {
        return $this->c4525;
    }

    public function setC4525(?bool $c4525): self
    {
        $this->c4525 = $c4525;

        return $this;
    }

    public function getC4526(): ?bool
    {
        return $this->c4526;
    }

    public function setC4526(?bool $c4526): self
    {
        $this->c4526 = $c4526;

        return $this;
    }

    public function getC4527(): ?bool
    {
        return $this->c4527;
    }

    public function setC4527(?bool $c4527): self
    {
        $this->c4527 = $c4527;

        return $this;
    }

    public function getC4528(): ?bool
    {
        return $this->c4528;
    }

    public function setC4528(?bool $c4528): self
    {
        $this->c4528 = $c4528;

        return $this;
    }

    public function getC4600(): ?bool
    {
        return $this->c4600;
    }

    public function setC4600(?bool $c4600): self
    {
        $this->c4600 = $c4600;

        return $this;
    }

    public function getC4601(): ?bool
    {
        return $this->c4601;
    }

    public function setC4601(?bool $c4601): self
    {
        $this->c4601 = $c4601;

        return $this;
    }

    public function getC4700(): ?bool
    {
        return $this->c4700;
    }

    public function setC4700(?bool $c4700): self
    {
        $this->c4700 = $c4700;

        return $this;
    }

    public function getC4701(): ?bool
    {
        return $this->c4701;
    }

    public function setC4701(?bool $c4701): self
    {
        $this->c4701 = $c4701;

        return $this;
    }

    public function getC4800(): ?bool
    {
        return $this->c4800;
    }

    public function setC4800(?bool $c4800): self
    {
        $this->c4800 = $c4800;

        return $this;
    }

    public function getC4801(): ?bool
    {
        return $this->c4801;
    }

    public function setC4801(?bool $c4801): self
    {
        $this->c4801 = $c4801;

        return $this;
    }

    public function getC4802(): ?bool
    {
        return $this->c4802;
    }

    public function setC4802(?bool $c4802): self
    {
        $this->c4802 = $c4802;

        return $this;
    }

    public function getC4803(): ?bool
    {
        return $this->c4803;
    }

    public function setC4803(?bool $c4803): self
    {
        $this->c4803 = $c4803;

        return $this;
    }

    public function getC4804(): ?bool
    {
        return $this->c4804;
    }

    public function setC4804(?bool $c4804): self
    {
        $this->c4804 = $c4804;

        return $this;
    }

    public function getC4805(): ?bool
    {
        return $this->c4805;
    }

    public function setC4805(?bool $c4805): self
    {
        $this->c4805 = $c4805;

        return $this;
    }

    public function getC4806(): ?bool
    {
        return $this->c4806;
    }

    public function setC4806(?bool $c4806): self
    {
        $this->c4806 = $c4806;

        return $this;
    }

    public function getC5000(): ?bool
    {
        return $this->c5000;
    }

    public function setC5000(?bool $c5000): self
    {
        $this->c5000 = $c5000;

        return $this;
    }

    public function getC5001(): ?bool
    {
        return $this->c5001;
    }

    public function setC5001(?bool $c5001): self
    {
        $this->c5001 = $c5001;

        return $this;
    }

    public function getC5010(): ?bool
    {
        return $this->c5010;
    }

    public function setC5010(?bool $c5010): self
    {
        $this->c5010 = $c5010;

        return $this;
    }

    public function getC5011(): ?bool
    {
        return $this->c5011;
    }

    public function setC5011(?bool $c5011): self
    {
        $this->c5011 = $c5011;

        return $this;
    }

    public function getC5012(): ?bool
    {
        return $this->c5012;
    }

    public function setC5012(?bool $c5012): self
    {
        $this->c5012 = $c5012;

        return $this;
    }

    public function getC5013(): ?bool
    {
        return $this->c5013;
    }

    public function setC5013(?bool $c5013): self
    {
        $this->c5013 = $c5013;

        return $this;
    }

    public function getC5014(): ?bool
    {
        return $this->c5014;
    }

    public function setC5014(?bool $c5014): self
    {
        $this->c5014 = $c5014;

        return $this;
    }

    public function getC5015(): ?bool
    {
        return $this->c5015;
    }

    public function setC5015(?bool $c5015): self
    {
        $this->c5015 = $c5015;

        return $this;
    }

    public function getC5016(): ?bool
    {
        return $this->c5016;
    }

    public function setC5016(?bool $c5016): self
    {
        $this->c5016 = $c5016;

        return $this;
    }

    public function getC5017(): ?bool
    {
        return $this->c5017;
    }

    public function setC5017(?bool $c5017): self
    {
        $this->c5017 = $c5017;

        return $this;
    }

    public function getC5018(): ?bool
    {
        return $this->c5018;
    }

    public function setC5018(?bool $c5018): self
    {
        $this->c5018 = $c5018;

        return $this;
    }

    public function getC5019(): ?bool
    {
        return $this->c5019;
    }

    public function setC5019(?bool $c5019): self
    {
        $this->c5019 = $c5019;

        return $this;
    }

    public function getC5020(): ?bool
    {
        return $this->c5020;
    }

    public function setC5020(?bool $c5020): self
    {
        $this->c5020 = $c5020;

        return $this;
    }

    public function getC5021(): ?bool
    {
        return $this->c5021;
    }

    public function setC5021(?bool $c5021): self
    {
        $this->c5021 = $c5021;

        return $this;
    }

    public function getC5110(): ?bool
    {
        return $this->c5110;
    }

    public function setC5110(?bool $c5110): self
    {
        $this->c5110 = $c5110;

        return $this;
    }

    public function getC5111(): ?bool
    {
        return $this->c5111;
    }

    public function setC5111(?bool $c5111): self
    {
        $this->c5111 = $c5111;

        return $this;
    }

    public function getC5112(): ?bool
    {
        return $this->c5112;
    }

    public function setC5112(?bool $c5112): self
    {
        $this->c5112 = $c5112;

        return $this;
    }

    public function getC5113(): ?bool
    {
        return $this->c5113;
    }

    public function setC5113(?bool $c5113): self
    {
        $this->c5113 = $c5113;

        return $this;
    }

    public function getC5114(): ?bool
    {
        return $this->c5114;
    }

    public function setC5114(?bool $c5114): self
    {
        $this->c5114 = $c5114;

        return $this;
    }

    public function getC5115(): ?bool
    {
        return $this->c5115;
    }

    public function setC5115(?bool $c5115): self
    {
        $this->c5115 = $c5115;

        return $this;
    }

    public function getC5116(): ?bool
    {
        return $this->c5116;
    }

    public function setC5116(?bool $c5116): self
    {
        $this->c5116 = $c5116;

        return $this;
    }

    public function getC5117(): ?bool
    {
        return $this->c5117;
    }

    public function setC5117(?bool $c5117): self
    {
        $this->c5117 = $c5117;

        return $this;
    }

    public function getC5118(): ?bool
    {
        return $this->c5118;
    }

    public function setC5118(?bool $c5118): self
    {
        $this->c5118 = $c5118;

        return $this;
    }

    public function getC5119(): ?bool
    {
        return $this->c5119;
    }

    public function setC5119(?bool $c5119): self
    {
        $this->c5119 = $c5119;

        return $this;
    }

    public function getC5120(): ?bool
    {
        return $this->c5120;
    }

    public function setC5120(?bool $c5120): self
    {
        $this->c5120 = $c5120;

        return $this;
    }

    public function getC5121(): ?bool
    {
        return $this->c5121;
    }

    public function setC5121(?bool $c5121): self
    {
        $this->c5121 = $c5121;

        return $this;
    }

    public function getC5210(): ?bool
    {
        return $this->c5210;
    }

    public function setC5210(?bool $c5210): self
    {
        $this->c5210 = $c5210;

        return $this;
    }

    public function getC5211(): ?bool
    {
        return $this->c5211;
    }

    public function setC5211(?bool $c5211): self
    {
        $this->c5211 = $c5211;

        return $this;
    }

    public function getC5212(): ?bool
    {
        return $this->c5212;
    }

    public function setC5212(?bool $c5212): self
    {
        $this->c5212 = $c5212;

        return $this;
    }

    public function getC5213(): ?bool
    {
        return $this->c5213;
    }

    public function setC5213(?bool $c5213): self
    {
        $this->c5213 = $c5213;

        return $this;
    }

    public function getC5214(): ?bool
    {
        return $this->c5214;
    }

    public function setC5214(?bool $c5214): self
    {
        $this->c5214 = $c5214;

        return $this;
    }

    public function getC5215(): ?bool
    {
        return $this->c5215;
    }

    public function setC5215(?bool $c5215): self
    {
        $this->c5215 = $c5215;

        return $this;
    }

    public function getC5216(): ?bool
    {
        return $this->c5216;
    }

    public function setC5216(?bool $c5216): self
    {
        $this->c5216 = $c5216;

        return $this;
    }

    public function getC5217(): ?bool
    {
        return $this->c5217;
    }

    public function setC5217(?bool $c5217): self
    {
        $this->c5217 = $c5217;

        return $this;
    }

    public function getC5218(): ?bool
    {
        return $this->c5218;
    }

    public function setC5218(?bool $c5218): self
    {
        $this->c5218 = $c5218;

        return $this;
    }

    public function getC5219(): ?bool
    {
        return $this->c5219;
    }

    public function setC5219(?bool $c5219): self
    {
        $this->c5219 = $c5219;

        return $this;
    }

    public function getC5220(): ?bool
    {
        return $this->c5220;
    }

    public function setC5220(?bool $c5220): self
    {
        $this->c5220 = $c5220;

        return $this;
    }

    public function getC5221(): ?bool
    {
        return $this->c5221;
    }

    public function setC5221(?bool $c5221): self
    {
        $this->c5221 = $c5221;

        return $this;
    }

    public function getC5310(): ?bool
    {
        return $this->c5310;
    }

    public function setC5310(?bool $c5310): self
    {
        $this->c5310 = $c5310;

        return $this;
    }

    public function getC5311(): ?bool
    {
        return $this->c5311;
    }

    public function setC5311(?bool $c5311): self
    {
        $this->c5311 = $c5311;

        return $this;
    }

    public function getC5312(): ?bool
    {
        return $this->c5312;
    }

    public function setC5312(?bool $c5312): self
    {
        $this->c5312 = $c5312;

        return $this;
    }

    public function getC5313(): ?bool
    {
        return $this->c5313;
    }

    public function setC5313(?bool $c5313): self
    {
        $this->c5313 = $c5313;

        return $this;
    }

    public function getC5314(): ?bool
    {
        return $this->c5314;
    }

    public function setC5314(?bool $c5314): self
    {
        $this->c5314 = $c5314;

        return $this;
    }

    public function getC5315(): ?bool
    {
        return $this->c5315;
    }

    public function setC5315(?bool $c5315): self
    {
        $this->c5315 = $c5315;

        return $this;
    }

    public function getC5316(): ?bool
    {
        return $this->c5316;
    }

    public function setC5316(?bool $c5316): self
    {
        $this->c5316 = $c5316;

        return $this;
    }

    public function getC5317(): ?bool
    {
        return $this->c5317;
    }

    public function setC5317(?bool $c5317): self
    {
        $this->c5317 = $c5317;

        return $this;
    }

    public function getC5410(): ?bool
    {
        return $this->c5410;
    }

    public function setC5410(?bool $c5410): self
    {
        $this->c5410 = $c5410;

        return $this;
    }

    public function getC5411(): ?bool
    {
        return $this->c5411;
    }

    public function setC5411(?bool $c5411): self
    {
        $this->c5411 = $c5411;

        return $this;
    }

    public function getC5412(): ?bool
    {
        return $this->c5412;
    }

    public function setC5412(?bool $c5412): self
    {
        $this->c5412 = $c5412;

        return $this;
    }

    public function getC5413(): ?bool
    {
        return $this->c5413;
    }

    public function setC5413(?bool $c5413): self
    {
        $this->c5413 = $c5413;

        return $this;
    }

    public function getC5414(): ?bool
    {
        return $this->c5414;
    }

    public function setC5414(?bool $c5414): self
    {
        $this->c5414 = $c5414;

        return $this;
    }

    public function getC5415(): ?bool
    {
        return $this->c5415;
    }

    public function setC5415(?bool $c5415): self
    {
        $this->c5415 = $c5415;

        return $this;
    }

    public function getC6000(): ?bool
    {
        return $this->c6000;
    }

    public function setC6000(?bool $c6000): self
    {
        $this->c6000 = $c6000;

        return $this;
    }

    public function getC6010(): ?bool
    {
        return $this->c6010;
    }

    public function setC6010(?bool $c6010): self
    {
        $this->c6010 = $c6010;

        return $this;
    }

    public function getC6011(): ?bool
    {
        return $this->c6011;
    }

    public function setC6011(?bool $c6011): self
    {
        $this->c6011 = $c6011;

        return $this;
    }

    public function getC6012(): ?bool
    {
        return $this->c6012;
    }

    public function setC6012(?bool $c6012): self
    {
        $this->c6012 = $c6012;

        return $this;
    }

    public function getC6050(): ?bool
    {
        return $this->c6050;
    }

    public function setC6050(?bool $c6050): self
    {
        $this->c6050 = $c6050;

        return $this;
    }

    public function getC6051(): ?bool
    {
        return $this->c6051;
    }

    public function setC6051(?bool $c6051): self
    {
        $this->c6051 = $c6051;

        return $this;
    }

    public function getC6052(): ?bool
    {
        return $this->c6052;
    }

    public function setC6052(?bool $c6052): self
    {
        $this->c6052 = $c6052;

        return $this;
    }

    public function getC6110(): ?bool
    {
        return $this->c6110;
    }

    public function setC6110(?bool $c6110): self
    {
        $this->c6110 = $c6110;

        return $this;
    }

    public function getC6111(): ?bool
    {
        return $this->c6111;
    }

    public function setC6111(?bool $c6111): self
    {
        $this->c6111 = $c6111;

        return $this;
    }

    public function getC6112(): ?bool
    {
        return $this->c6112;
    }

    public function setC6112(?bool $c6112): self
    {
        $this->c6112 = $c6112;

        return $this;
    }

    public function getC6113(): ?bool
    {
        return $this->c6113;
    }

    public function setC6113(?bool $c6113): self
    {
        $this->c6113 = $c6113;

        return $this;
    }

    public function getC6114(): ?bool
    {
        return $this->c6114;
    }

    public function setC6114(?bool $c6114): self
    {
        $this->c6114 = $c6114;

        return $this;
    }

    public function getC6115(): ?bool
    {
        return $this->c6115;
    }

    public function setC6115(?bool $c6115): self
    {
        $this->c6115 = $c6115;

        return $this;
    }

    public function getC6116(): ?bool
    {
        return $this->c6116;
    }

    public function setC6116(?bool $c6116): self
    {
        $this->c6116 = $c6116;

        return $this;
    }

    public function getC6117(): ?bool
    {
        return $this->c6117;
    }

    public function setC6117(?bool $c6117): self
    {
        $this->c6117 = $c6117;

        return $this;
    }

    public function getC6118(): ?bool
    {
        return $this->c6118;
    }

    public function setC6118(?bool $c6118): self
    {
        $this->c6118 = $c6118;

        return $this;
    }

    public function getC6119(): ?bool
    {
        return $this->c6119;
    }

    public function setC6119(?bool $c6119): self
    {
        $this->c6119 = $c6119;

        return $this;
    }

    public function getC6120(): ?bool
    {
        return $this->c6120;
    }

    public function setC6120(?bool $c6120): self
    {
        $this->c6120 = $c6120;

        return $this;
    }

    public function getC6121(): ?bool
    {
        return $this->c6121;
    }

    public function setC6121(?bool $c6121): self
    {
        $this->c6121 = $c6121;

        return $this;
    }

    public function getC6122(): ?bool
    {
        return $this->c6122;
    }

    public function setC6122(?bool $c6122): self
    {
        $this->c6122 = $c6122;

        return $this;
    }

    public function getC6123(): ?bool
    {
        return $this->c6123;
    }

    public function setC6123(?bool $c6123): self
    {
        $this->c6123 = $c6123;

        return $this;
    }

    public function getC6124(): ?bool
    {
        return $this->c6124;
    }

    public function setC6124(?bool $c6124): self
    {
        $this->c6124 = $c6124;

        return $this;
    }

    public function getC6125(): ?bool
    {
        return $this->c6125;
    }

    public function setC6125(?bool $c6125): self
    {
        $this->c6125 = $c6125;

        return $this;
    }

    public function getC6126(): ?bool
    {
        return $this->c6126;
    }

    public function setC6126(?bool $c6126): self
    {
        $this->c6126 = $c6126;

        return $this;
    }

    public function getC6127(): ?bool
    {
        return $this->c6127;
    }

    public function setC6127(?bool $c6127): self
    {
        $this->c6127 = $c6127;

        return $this;
    }

    public function getC6210(): ?bool
    {
        return $this->c6210;
    }

    public function setC6210(?bool $c6210): self
    {
        $this->c6210 = $c6210;

        return $this;
    }

    public function getC6211(): ?bool
    {
        return $this->c6211;
    }

    public function setC6211(?bool $c6211): self
    {
        $this->c6211 = $c6211;

        return $this;
    }

    public function getC6212(): ?bool
    {
        return $this->c6212;
    }

    public function setC6212(?bool $c6212): self
    {
        $this->c6212 = $c6212;

        return $this;
    }

    public function getC6213(): ?bool
    {
        return $this->c6213;
    }

    public function setC6213(?bool $c6213): self
    {
        $this->c6213 = $c6213;

        return $this;
    }

    public function getC6214(): ?bool
    {
        return $this->c6214;
    }

    public function setC6214(?bool $c6214): self
    {
        $this->c6214 = $c6214;

        return $this;
    }

    public function getC6215(): ?bool
    {
        return $this->c6215;
    }

    public function setC6215(?bool $c6215): self
    {
        $this->c6215 = $c6215;

        return $this;
    }

    public function getC6216(): ?bool
    {
        return $this->c6216;
    }

    public function setC6216(?bool $c6216): self
    {
        $this->c6216 = $c6216;

        return $this;
    }

    public function getC6217(): ?bool
    {
        return $this->c6217;
    }

    public function setC6217(?bool $c6217): self
    {
        $this->c6217 = $c6217;

        return $this;
    }

    public function getC6310(): ?bool
    {
        return $this->c6310;
    }

    public function setC6310(?bool $c6310): self
    {
        $this->c6310 = $c6310;

        return $this;
    }

    public function getC6311(): ?bool
    {
        return $this->c6311;
    }

    public function setC6311(?bool $c6311): self
    {
        $this->c6311 = $c6311;

        return $this;
    }

    public function getC6312(): ?bool
    {
        return $this->c6312;
    }

    public function setC6312(?bool $c6312): self
    {
        $this->c6312 = $c6312;

        return $this;
    }

    public function getC6313(): ?bool
    {
        return $this->c6313;
    }

    public function setC6313(?bool $c6313): self
    {
        $this->c6313 = $c6313;

        return $this;
    }

    public function getC6314(): ?bool
    {
        return $this->c6314;
    }

    public function setC6314(?bool $c6314): self
    {
        $this->c6314 = $c6314;

        return $this;
    }

    public function getC6315(): ?bool
    {
        return $this->c6315;
    }

    public function setC6315(?bool $c6315): self
    {
        $this->c6315 = $c6315;

        return $this;
    }

    public function getC6316(): ?bool
    {
        return $this->c6316;
    }

    public function setC6316(?bool $c6316): self
    {
        $this->c6316 = $c6316;

        return $this;
    }

    public function getC6317(): ?bool
    {
        return $this->c6317;
    }

    public function setC6317(?bool $c6317): self
    {
        $this->c6317 = $c6317;

        return $this;
    }

    public function getC6318(): ?bool
    {
        return $this->c6318;
    }

    public function setC6318(?bool $c6318): self
    {
        $this->c6318 = $c6318;

        return $this;
    }

    public function getC6319(): ?bool
    {
        return $this->c6319;
    }

    public function setC6319(?bool $c6319): self
    {
        $this->c6319 = $c6319;

        return $this;
    }

    public function getC6320(): ?bool
    {
        return $this->c6320;
    }

    public function setC6320(?bool $c6320): self
    {
        $this->c6320 = $c6320;

        return $this;
    }

    public function getC6321(): ?bool
    {
        return $this->c6321;
    }

    public function setC6321(?bool $c6321): self
    {
        $this->c6321 = $c6321;

        return $this;
    }

    public function getC6322(): ?bool
    {
        return $this->c6322;
    }

    public function setC6322(?bool $c6322): self
    {
        $this->c6322 = $c6322;

        return $this;
    }

    public function getC6410(): ?bool
    {
        return $this->c6410;
    }

    public function setC6410(?bool $c6410): self
    {
        $this->c6410 = $c6410;

        return $this;
    }

    public function getC6411(): ?bool
    {
        return $this->c6411;
    }

    public function setC6411(?bool $c6411): self
    {
        $this->c6411 = $c6411;

        return $this;
    }

    public function getC6412(): ?bool
    {
        return $this->c6412;
    }

    public function setC6412(?bool $c6412): self
    {
        $this->c6412 = $c6412;

        return $this;
    }

    public function getC6413(): ?bool
    {
        return $this->c6413;
    }

    public function setC6413(?bool $c6413): self
    {
        $this->c6413 = $c6413;

        return $this;
    }

    public function getC6414(): ?bool
    {
        return $this->c6414;
    }

    public function setC6414(?bool $c6414): self
    {
        $this->c6414 = $c6414;

        return $this;
    }

    public function getC6415(): ?bool
    {
        return $this->c6415;
    }

    public function setC6415(?bool $c6415): self
    {
        $this->c6415 = $c6415;

        return $this;
    }

    public function getC6416(): ?bool
    {
        return $this->c6416;
    }

    public function setC6416(?bool $c6416): self
    {
        $this->c6416 = $c6416;

        return $this;
    }

    public function getC6417(): ?bool
    {
        return $this->c6417;
    }

    public function setC6417(?bool $c6417): self
    {
        $this->c6417 = $c6417;

        return $this;
    }

    public function getC6418(): ?bool
    {
        return $this->c6418;
    }

    public function setC6418(?bool $c6418): self
    {
        $this->c6418 = $c6418;

        return $this;
    }

    public function getC6419(): ?bool
    {
        return $this->c6419;
    }

    public function setC6419(?bool $c6419): self
    {
        $this->c6419 = $c6419;

        return $this;
    }

    public function getC6420(): ?bool
    {
        return $this->c6420;
    }

    public function setC6420(?bool $c6420): self
    {
        $this->c6420 = $c6420;

        return $this;
    }

    public function getC6421(): ?bool
    {
        return $this->c6421;
    }

    public function setC6421(?bool $c6421): self
    {
        $this->c6421 = $c6421;

        return $this;
    }

    public function getC6422(): ?bool
    {
        return $this->c6422;
    }

    public function setC6422(?bool $c6422): self
    {
        $this->c6422 = $c6422;

        return $this;
    }

    public function getC6510(): ?bool
    {
        return $this->c6510;
    }

    public function setC6510(?bool $c6510): self
    {
        $this->c6510 = $c6510;

        return $this;
    }

    public function getC6511(): ?bool
    {
        return $this->c6511;
    }

    public function setC6511(?bool $c6511): self
    {
        $this->c6511 = $c6511;

        return $this;
    }

    public function getC6512(): ?bool
    {
        return $this->c6512;
    }

    public function setC6512(?bool $c6512): self
    {
        $this->c6512 = $c6512;

        return $this;
    }

    public function getC6513(): ?bool
    {
        return $this->c6513;
    }

    public function setC6513(?bool $c6513): self
    {
        $this->c6513 = $c6513;

        return $this;
    }

    public function getC6514(): ?bool
    {
        return $this->c6514;
    }

    public function setC6514(?bool $c6514): self
    {
        $this->c6514 = $c6514;

        return $this;
    }

    public function getC6515(): ?bool
    {
        return $this->c6515;
    }

    public function setC6515(?bool $c6515): self
    {
        $this->c6515 = $c6515;

        return $this;
    }

    public function getC6516(): ?bool
    {
        return $this->c6516;
    }

    public function setC6516(?bool $c6516): self
    {
        $this->c6516 = $c6516;

        return $this;
    }

    public function getC6517(): ?bool
    {
        return $this->c6517;
    }

    public function setC6517(?bool $c6517): self
    {
        $this->c6517 = $c6517;

        return $this;
    }

    public function getC6518(): ?bool
    {
        return $this->c6518;
    }

    public function setC6518(?bool $c6518): self
    {
        $this->c6518 = $c6518;

        return $this;
    }

    public function getC6519(): ?bool
    {
        return $this->c6519;
    }

    public function setC6519(?bool $c6519): self
    {
        $this->c6519 = $c6519;

        return $this;
    }

    public function getC6520(): ?bool
    {
        return $this->c6520;
    }

    public function setC6520(?bool $c6520): self
    {
        $this->c6520 = $c6520;

        return $this;
    }

    public function getC6521(): ?bool
    {
        return $this->c6521;
    }

    public function setC6521(?bool $c6521): self
    {
        $this->c6521 = $c6521;

        return $this;
    }

    public function getC6522(): ?bool
    {
        return $this->c6522;
    }

    public function setC6522(?bool $c6522): self
    {
        $this->c6522 = $c6522;

        return $this;
    }

    public function getC6610(): ?bool
    {
        return $this->c6610;
    }

    public function setC6610(?bool $c6610): self
    {
        $this->c6610 = $c6610;

        return $this;
    }

    public function getC6611(): ?bool
    {
        return $this->c6611;
    }

    public function setC6611(?bool $c6611): self
    {
        $this->c6611 = $c6611;

        return $this;
    }

    public function getC7000(): ?bool
    {
        return $this->c7000;
    }

    public function setC7000(?bool $c7000): self
    {
        $this->c7000 = $c7000;

        return $this;
    }

    public function getC7010(): ?bool
    {
        return $this->c7010;
    }

    public function setC7010(?bool $c7010): self
    {
        $this->c7010 = $c7010;

        return $this;
    }

    public function getC7011(): ?bool
    {
        return $this->c7011;
    }

    public function setC7011(?bool $c7011): self
    {
        $this->c7011 = $c7011;

        return $this;
    }

    public function getC7012(): ?bool
    {
        return $this->c7012;
    }

    public function setC7012(?bool $c7012): self
    {
        $this->c7012 = $c7012;

        return $this;
    }

    public function getC7013(): ?bool
    {
        return $this->c7013;
    }

    public function setC7013(?bool $c7013): self
    {
        $this->c7013 = $c7013;

        return $this;
    }

    public function getC7014(): ?bool
    {
        return $this->c7014;
    }

    public function setC7014(?bool $c7014): self
    {
        $this->c7014 = $c7014;

        return $this;
    }

    public function getC7015(): ?bool
    {
        return $this->c7015;
    }

    public function setC7015(?bool $c7015): self
    {
        $this->c7015 = $c7015;

        return $this;
    }

    public function getC7016(): ?bool
    {
        return $this->c7016;
    }

    public function setC7016(?bool $c7016): self
    {
        $this->c7016 = $c7016;

        return $this;
    }

    public function getC7017(): ?bool
    {
        return $this->c7017;
    }

    public function setC7017(?bool $c7017): self
    {
        $this->c7017 = $c7017;

        return $this;
    }

    public function getC7020(): ?bool
    {
        return $this->c7020;
    }

    public function setC7020(?bool $c7020): self
    {
        $this->c7020 = $c7020;

        return $this;
    }

    public function getC7021(): ?bool
    {
        return $this->c7021;
    }

    public function setC7021(?bool $c7021): self
    {
        $this->c7021 = $c7021;

        return $this;
    }

    public function getC7022(): ?bool
    {
        return $this->c7022;
    }

    public function setC7022(?bool $c7022): self
    {
        $this->c7022 = $c7022;

        return $this;
    }

    public function getC7023(): ?bool
    {
        return $this->c7023;
    }

    public function setC7023(?bool $c7023): self
    {
        $this->c7023 = $c7023;

        return $this;
    }

    public function getC7030(): ?bool
    {
        return $this->c7030;
    }

    public function setC7030(?bool $c7030): self
    {
        $this->c7030 = $c7030;

        return $this;
    }

    public function getC7031(): ?bool
    {
        return $this->c7031;
    }

    public function setC7031(?bool $c7031): self
    {
        $this->c7031 = $c7031;

        return $this;
    }

    public function getC7032(): ?bool
    {
        return $this->c7032;
    }

    public function setC7032(?bool $c7032): self
    {
        $this->c7032 = $c7032;

        return $this;
    }

    public function getC7033(): ?bool
    {
        return $this->c7033;
    }

    public function setC7033(?bool $c7033): self
    {
        $this->c7033 = $c7033;

        return $this;
    }

    public function getC7034(): ?bool
    {
        return $this->c7034;
    }

    public function setC7034(?bool $c7034): self
    {
        $this->c7034 = $c7034;

        return $this;
    }

    public function getC7035(): ?bool
    {
        return $this->c7035;
    }

    public function setC7035(?bool $c7035): self
    {
        $this->c7035 = $c7035;

        return $this;
    }

    public function getC7036(): ?bool
    {
        return $this->c7036;
    }

    public function setC7036(?bool $c7036): self
    {
        $this->c7036 = $c7036;

        return $this;
    }

    public function getC7040(): ?bool
    {
        return $this->c7040;
    }

    public function setC7040(?bool $c7040): self
    {
        $this->c7040 = $c7040;

        return $this;
    }

    public function getC7041(): ?bool
    {
        return $this->c7041;
    }

    public function setC7041(?bool $c7041): self
    {
        $this->c7041 = $c7041;

        return $this;
    }

    public function getC7050(): ?bool
    {
        return $this->c7050;
    }

    public function setC7050(?bool $c7050): self
    {
        $this->c7050 = $c7050;

        return $this;
    }

    public function getC7051(): ?bool
    {
        return $this->c7051;
    }

    public function setC7051(?bool $c7051): self
    {
        $this->c7051 = $c7051;

        return $this;
    }

    public function getC7060(): ?bool
    {
        return $this->c7060;
    }

    public function setC7060(?bool $c7060): self
    {
        $this->c7060 = $c7060;

        return $this;
    }

    public function getC7061(): ?bool
    {
        return $this->c7061;
    }

    public function setC7061(?bool $c7061): self
    {
        $this->c7061 = $c7061;

        return $this;
    }

    public function getC7062(): ?bool
    {
        return $this->c7062;
    }

    public function setC7062(?bool $c7062): self
    {
        $this->c7062 = $c7062;

        return $this;
    }

    public function getC7063(): ?bool
    {
        return $this->c7063;
    }

    public function setC7063(?bool $c7063): self
    {
        $this->c7063 = $c7063;

        return $this;
    }

    public function getC7064(): ?bool
    {
        return $this->c7064;
    }

    public function setC7064(?bool $c7064): self
    {
        $this->c7064 = $c7064;

        return $this;
    }

    public function getC7065(): ?bool
    {
        return $this->c7065;
    }

    public function setC7065(?bool $c7065): self
    {
        $this->c7065 = $c7065;

        return $this;
    }

    public function getC7066(): ?bool
    {
        return $this->c7066;
    }

    public function setC7066(?bool $c7066): self
    {
        $this->c7066 = $c7066;

        return $this;
    }

    public function getC7067(): ?bool
    {
        return $this->c7067;
    }

    public function setC7067(?bool $c7067): self
    {
        $this->c7067 = $c7067;

        return $this;
    }

    public function getC7068(): ?bool
    {
        return $this->c7068;
    }

    public function setC7068(?bool $c7068): self
    {
        $this->c7068 = $c7068;

        return $this;
    }

    public function getC7069(): ?bool
    {
        return $this->c7069;
    }

    public function setC7069(?bool $c7069): self
    {
        $this->c7069 = $c7069;

        return $this;
    }

    public function getC7070(): ?bool
    {
        return $this->c7070;
    }

    public function setC7070(?bool $c7070): self
    {
        $this->c7070 = $c7070;

        return $this;
    }

    public function getC7071(): ?bool
    {
        return $this->c7071;
    }

    public function setC7071(?bool $c7071): self
    {
        $this->c7071 = $c7071;

        return $this;
    }

    public function getC8000(): ?bool
    {
        return $this->c8000;
    }

    public function setC8000(?bool $c8000): self
    {
        $this->c8000 = $c8000;

        return $this;
    }

    public function getC8001(): ?bool
    {
        return $this->c8001;
    }

    public function setC8001(?bool $c8001): self
    {
        $this->c8001 = $c8001;

        return $this;
    }

    public function getC8002(): ?bool
    {
        return $this->c8002;
    }

    public function setC8002(?bool $c8002): self
    {
        $this->c8002 = $c8002;

        return $this;
    }

    public function getC8003(): ?bool
    {
        return $this->c8003;
    }

    public function setC8003(?bool $c8003): self
    {
        $this->c8003 = $c8003;

        return $this;
    }

    public function getC8004(): ?bool
    {
        return $this->c8004;
    }

    public function setC8004(?bool $c8004): self
    {
        $this->c8004 = $c8004;

        return $this;
    }

    public function getC8005(): ?bool
    {
        return $this->c8005;
    }

    public function setC8005(?bool $c8005): self
    {
        $this->c8005 = $c8005;

        return $this;
    }

    public function getC8006(): ?bool
    {
        return $this->c8006;
    }

    public function setC8006(?bool $c8006): self
    {
        $this->c8006 = $c8006;

        return $this;
    }

    public function getC8007(): ?bool
    {
        return $this->c8007;
    }

    public function setC8007(?bool $c8007): self
    {
        $this->c8007 = $c8007;

        return $this;
    }

    public function getC8101(): ?bool
    {
        return $this->c8101;
    }

    public function setC8101(?bool $c8101): self
    {
        $this->c8101 = $c8101;

        return $this;
    }

    public function getC8102(): ?bool
    {
        return $this->c8102;
    }

    public function setC8102(?bool $c8102): self
    {
        $this->c8102 = $c8102;

        return $this;
    }

    public function getC8103(): ?bool
    {
        return $this->c8103;
    }

    public function setC8103(?bool $c8103): self
    {
        $this->c8103 = $c8103;

        return $this;
    }

    public function getC8104(): ?bool
    {
        return $this->c8104;
    }

    public function setC8104(?bool $c8104): self
    {
        $this->c8104 = $c8104;

        return $this;
    }

    public function getC8105(): ?bool
    {
        return $this->c8105;
    }

    public function setC8105(?bool $c8105): self
    {
        $this->c8105 = $c8105;

        return $this;
    }

    public function getC8106(): ?bool
    {
        return $this->c8106;
    }

    public function setC8106(?bool $c8106): self
    {
        $this->c8106 = $c8106;

        return $this;
    }

    public function getC8107(): ?bool
    {
        return $this->c8107;
    }

    public function setC8107(?bool $c8107): self
    {
        $this->c8107 = $c8107;

        return $this;
    }

    public function getC8108(): ?bool
    {
        return $this->c8108;
    }

    public function setC8108(?bool $c8108): self
    {
        $this->c8108 = $c8108;

        return $this;
    }

    public function getC8109(): ?bool
    {
        return $this->c8109;
    }

    public function setC8109(?bool $c8109): self
    {
        $this->c8109 = $c8109;

        return $this;
    }

    public function getC8110(): ?bool
    {
        return $this->c8110;
    }

    public function setC8110(?bool $c8110): self
    {
        $this->c8110 = $c8110;

        return $this;
    }

    public function getC8111(): ?bool
    {
        return $this->c8111;
    }

    public function setC8111(?bool $c8111): self
    {
        $this->c8111 = $c8111;

        return $this;
    }

    public function getC8112(): ?bool
    {
        return $this->c8112;
    }

    public function setC8112(?bool $c8112): self
    {
        $this->c8112 = $c8112;

        return $this;
    }

    public function getC8113(): ?bool
    {
        return $this->c8113;
    }

    public function setC8113(?bool $c8113): self
    {
        $this->c8113 = $c8113;

        return $this;
    }

    public function getC8114(): ?bool
    {
        return $this->c8114;
    }

    public function setC8114(?bool $c8114): self
    {
        $this->c8114 = $c8114;

        return $this;
    }

    public function getC8115(): ?bool
    {
        return $this->c8115;
    }

    public function setC8115(?bool $c8115): self
    {
        $this->c8115 = $c8115;

        return $this;
    }

    public function getC8116(): ?bool
    {
        return $this->c8116;
    }

    public function setC8116(?bool $c8116): self
    {
        $this->c8116 = $c8116;

        return $this;
    }

    public function getC8117(): ?bool
    {
        return $this->c8117;
    }

    public function setC8117(?bool $c8117): self
    {
        $this->c8117 = $c8117;

        return $this;
    }

    public function getC8118(): ?bool
    {
        return $this->c8118;
    }

    public function setC8118(?bool $c8118): self
    {
        $this->c8118 = $c8118;

        return $this;
    }

    public function getC8119(): ?bool
    {
        return $this->c8119;
    }

    public function setC8119(?bool $c8119): self
    {
        $this->c8119 = $c8119;

        return $this;
    }

    public function getC8120(): ?bool
    {
        return $this->c8120;
    }

    public function setC8120(?bool $c8120): self
    {
        $this->c8120 = $c8120;

        return $this;
    }

    public function getC8121(): ?bool
    {
        return $this->c8121;
    }

    public function setC8121(?bool $c8121): self
    {
        $this->c8121 = $c8121;

        return $this;
    }

    public function getC8122(): ?bool
    {
        return $this->c8122;
    }

    public function setC8122(?bool $c8122): self
    {
        $this->c8122 = $c8122;

        return $this;
    }

    public function getC8123(): ?bool
    {
        return $this->c8123;
    }

    public function setC8123(?bool $c8123): self
    {
        $this->c8123 = $c8123;

        return $this;
    }

    public function getC8124(): ?bool
    {
        return $this->c8124;
    }

    public function setC8124(?bool $c8124): self
    {
        $this->c8124 = $c8124;

        return $this;
    }

    public function getC8125(): ?bool
    {
        return $this->c8125;
    }

    public function setC8125(?bool $c8125): self
    {
        $this->c8125 = $c8125;

        return $this;
    }

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): self
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): self
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getC10000(): ?bool
    {
        return $this->c10000;
    }

    public function setC10000(?bool $c10000): self
    {
        $this->c10000 = $c10000;

        return $this;
    }

    public function getC10001(): ?bool
    {
        return $this->c10001;
    }

    public function setC10001(?bool $c10001): self
    {
        $this->c10001 = $c10001;

        return $this;
    }

    public function getC10002(): ?bool
    {
        return $this->c10002;
    }

    public function setC10002(?bool $c10002): self
    {
        $this->c10002 = $c10002;

        return $this;
    }

    public function getC10003(): ?bool
    {
        return $this->c10003;
    }

    public function setC10003(?bool $c10003): self
    {
        $this->c10003 = $c10003;

        return $this;
    }

    public function getC10004(): ?bool
    {
        return $this->c10004;
    }

    public function setC10004(?bool $c10004): self
    {
        $this->c10004 = $c10004;

        return $this;
    }

    public function getC10005(): ?bool
    {
        return $this->c10005;
    }

    public function setC10005(?bool $c10005): self
    {
        $this->c10005 = $c10005;

        return $this;
    }

    public function getC10006(): ?bool
    {
        return $this->c10006;
    }

    public function setC10006(?bool $c10006): self
    {
        $this->c10006 = $c10006;

        return $this;
    }

    public function getC10007(): ?bool
    {
        return $this->c10007;
    }

    public function setC10007(?bool $c10007): self
    {
        $this->c10007 = $c10007;

        return $this;
    }

    public function getC10008(): ?bool
    {
        return $this->c10008;
    }

    public function setC10008(?bool $c10008): self
    {
        $this->c10008 = $c10008;

        return $this;
    }

    public function getC10009(): ?bool
    {
        return $this->c10009;
    }

    public function setC10009(?bool $c10009): self
    {
        $this->c10009 = $c10009;

        return $this;
    }

    public function getC10010(): ?bool
    {
        return $this->c10010;
    }

    public function setC10010(?bool $c10010): self
    {
        $this->c10010 = $c10010;

        return $this;
    }

    public function getC10011(): ?bool
    {
        return $this->c10011;
    }

    public function setC10011(?bool $c10011): self
    {
        $this->c10011 = $c10011;

        return $this;
    }

    public function getC10012(): ?bool
    {
        return $this->c10012;
    }

    public function setC10012(?bool $c10012): self
    {
        $this->c10012 = $c10012;

        return $this;
    }

    public function getC10013(): ?bool
    {
        return $this->c10013;
    }

    public function setC10013(?bool $c10013): self
    {
        $this->c10013 = $c10013;

        return $this;
    }

    public function getC10014(): ?bool
    {
        return $this->c10014;
    }

    public function setC10014(?bool $c10014): self
    {
        $this->c10014 = $c10014;

        return $this;
    }

    public function getC10015(): ?bool
    {
        return $this->c10015;
    }

    public function setC10015(?bool $c10015): self
    {
        $this->c10015 = $c10015;

        return $this;
    }

    public function getC10016(): ?bool
    {
        return $this->c10016;
    }

    public function setC10016(?bool $c10016): self
    {
        $this->c10016 = $c10016;

        return $this;
    }

    public function getC10017(): ?bool
    {
        return $this->c10017;
    }

    public function setC10017(?bool $c10017): self
    {
        $this->c10017 = $c10017;

        return $this;
    }

    public function getC10018(): ?bool
    {
        return $this->c10018;
    }

    public function setC10018(?bool $c10018): self
    {
        $this->c10018 = $c10018;

        return $this;
    }

    public function getC10019(): ?bool
    {
        return $this->c10019;
    }

    public function setC10019(?bool $c10019): self
    {
        $this->c10019 = $c10019;

        return $this;
    }

    public function getC10020(): ?bool
    {
        return $this->c10020;
    }

    public function setC10020(?bool $c10020): self
    {
        $this->c10020 = $c10020;

        return $this;
    }

    public function getC10021(): ?bool
    {
        return $this->c10021;
    }

    public function setC10021(?bool $c10021): self
    {
        $this->c10021 = $c10021;

        return $this;
    }

    public function getC10022(): ?bool
    {
        return $this->c10022;
    }

    public function setC10022(?bool $c10022): self
    {
        $this->c10022 = $c10022;

        return $this;
    }

    public function getC10023(): ?bool
    {
        return $this->c10023;
    }

    public function setC10023(?bool $c10023): self
    {
        $this->c10023 = $c10023;

        return $this;
    }

    public function getC10024(): ?bool
    {
        return $this->c10024;
    }

    public function setC10024(?bool $c10024): self
    {
        $this->c10024 = $c10024;

        return $this;
    }

    public function getC10025(): ?bool
    {
        return $this->c10025;
    }

    public function setC10025(?bool $c10025): self
    {
        $this->c10025 = $c10025;

        return $this;
    }

    public function getC10026(): ?bool
    {
        return $this->c10026;
    }

    public function setC10026(?bool $c10026): self
    {
        $this->c10026 = $c10026;

        return $this;
    }

    public function getC10027(): ?bool
    {
        return $this->c10027;
    }

    public function setC10027(?bool $c10027): self
    {
        $this->c10027 = $c10027;

        return $this;
    }

    public function getC10028(): ?bool
    {
        return $this->c10028;
    }

    public function setC10028(?bool $c10028): self
    {
        $this->c10028 = $c10028;

        return $this;
    }

    public function getC10029(): ?bool
    {
        return $this->c10029;
    }

    public function setC10029(?bool $c10029): self
    {
        $this->c10029 = $c10029;

        return $this;
    }

    public function getC10030(): ?bool
    {
        return $this->c10030;
    }

    public function setC10030(?bool $c10030): self
    {
        $this->c10030 = $c10030;

        return $this;
    }

    public function getC10031(): ?bool
    {
        return $this->c10031;
    }

    public function setC10031(?bool $c10031): self
    {
        $this->c10031 = $c10031;

        return $this;
    }

    public function getC10032(): ?bool
    {
        return $this->c10032;
    }

    public function setC10032(?bool $c10032): self
    {
        $this->c10032 = $c10032;

        return $this;
    }

    public function getC10033(): ?bool
    {
        return $this->c10033;
    }

    public function setC10033(?bool $c10033): self
    {
        $this->c10033 = $c10033;

        return $this;
    }

    public function getC10034(): ?bool
    {
        return $this->c10034;
    }

    public function setC10034(?bool $c10034): self
    {
        $this->c10034 = $c10034;

        return $this;
    }

    public function getC10035(): ?bool
    {
        return $this->c10035;
    }

    public function setC10035(?bool $c10035): self
    {
        $this->c10035 = $c10035;

        return $this;
    }

    public function getC10036(): ?bool
    {
        return $this->c10036;
    }

    public function setC10036(?bool $c10036): self
    {
        $this->c10036 = $c10036;

        return $this;
    }

    public function getC10037(): ?bool
    {
        return $this->c10037;
    }

    public function setC10037(?bool $c10037): self
    {
        $this->c10037 = $c10037;

        return $this;
    }

    public function getC10038(): ?bool
    {
        return $this->c10038;
    }

    public function setC10038(?bool $c10038): self
    {
        $this->c10038 = $c10038;

        return $this;
    }

    public function getC10039(): ?bool
    {
        return $this->c10039;
    }

    public function setC10039(?bool $c10039): self
    {
        $this->c10039 = $c10039;

        return $this;
    }

    public function getC10040(): ?bool
    {
        return $this->c10040;
    }

    public function setC10040(?bool $c10040): self
    {
        $this->c10040 = $c10040;

        return $this;
    }

    public function getC10041(): ?bool
    {
        return $this->c10041;
    }

    public function setC10041(?bool $c10041): self
    {
        $this->c10041 = $c10041;

        return $this;
    }

    public function getC10042(): ?bool
    {
        return $this->c10042;
    }

    public function setC10042(?bool $c10042): self
    {
        $this->c10042 = $c10042;

        return $this;
    }

    public function getC10043(): ?bool
    {
        return $this->c10043;
    }

    public function setC10043(?bool $c10043): self
    {
        $this->c10043 = $c10043;

        return $this;
    }

    public function getC10044(): ?bool
    {
        return $this->c10044;
    }

    public function setC10044(?bool $c10044): self
    {
        $this->c10044 = $c10044;

        return $this;
    }

    public function getC10045(): ?bool
    {
        return $this->c10045;
    }

    public function setC10045(?bool $c10045): self
    {
        $this->c10045 = $c10045;

        return $this;
    }

    public function getC10046(): ?bool
    {
        return $this->c10046;
    }

    public function setC10046(?bool $c10046): self
    {
        $this->c10046 = $c10046;

        return $this;
    }

    public function getC10047(): ?bool
    {
        return $this->c10047;
    }

    public function setC10047(?bool $c10047): self
    {
        $this->c10047 = $c10047;

        return $this;
    }

    public function getC10048(): ?bool
    {
        return $this->c10048;
    }

    public function setC10048(?bool $c10048): self
    {
        $this->c10048 = $c10048;

        return $this;
    }

    public function getC10049(): ?bool
    {
        return $this->c10049;
    }

    public function setC10049(?bool $c10049): self
    {
        $this->c10049 = $c10049;

        return $this;
    }

    public function getC10050(): ?bool
    {
        return $this->c10050;
    }

    public function setC10050(?bool $c10050): self
    {
        $this->c10050 = $c10050;

        return $this;
    }

    public function getC10051(): ?bool
    {
        return $this->c10051;
    }

    public function setC10051(?bool $c10051): self
    {
        $this->c10051 = $c10051;

        return $this;
    }

    public function getC10052(): ?bool
    {
        return $this->c10052;
    }

    public function setC10052(?bool $c10052): self
    {
        $this->c10052 = $c10052;

        return $this;
    }

    public function getC10053(): ?bool
    {
        return $this->c10053;
    }

    public function setC10053(?bool $c10053): self
    {
        $this->c10053 = $c10053;

        return $this;
    }

    public function getC10054(): ?bool
    {
        return $this->c10054;
    }

    public function setC10054(?bool $c10054): self
    {
        $this->c10054 = $c10054;

        return $this;
    }

    public function getC10055(): ?bool
    {
        return $this->c10055;
    }

    public function setC10055(?bool $c10055): self
    {
        $this->c10055 = $c10055;

        return $this;
    }

    public function getC10056(): ?bool
    {
        return $this->c10056;
    }

    public function setC10056(?bool $c10056): self
    {
        $this->c10056 = $c10056;

        return $this;
    }

    public function getC10057(): ?bool
    {
        return $this->c10057;
    }

    public function setC10057(?bool $c10057): self
    {
        $this->c10057 = $c10057;

        return $this;
    }

    public function getC10058(): ?bool
    {
        return $this->c10058;
    }

    public function setC10058(?bool $c10058): self
    {
        $this->c10058 = $c10058;

        return $this;
    }

    public function getC10059(): ?bool
    {
        return $this->c10059;
    }

    public function setC10059(?bool $c10059): self
    {
        $this->c10059 = $c10059;

        return $this;
    }

    public function getC10060(): ?bool
    {
        return $this->c10060;
    }

    public function setC10060(?bool $c10060): self
    {
        $this->c10060 = $c10060;

        return $this;
    }

    public function getC10061(): ?bool
    {
        return $this->c10061;
    }

    public function setC10061(?bool $c10061): self
    {
        $this->c10061 = $c10061;

        return $this;
    }

    public function getC10062(): ?bool
    {
        return $this->c10062;
    }

    public function setC10062(?bool $c10062): self
    {
        $this->c10062 = $c10062;

        return $this;
    }

    public function getC10063(): ?bool
    {
        return $this->c10063;
    }

    public function setC10063(?bool $c10063): self
    {
        $this->c10063 = $c10063;

        return $this;
    }

    public function getC10064(): ?bool
    {
        return $this->c10064;
    }

    public function setC10064(?bool $c10064): self
    {
        $this->c10064 = $c10064;

        return $this;
    }

    public function getC10065(): ?bool
    {
        return $this->c10065;
    }

    public function setC10065(?bool $c10065): self
    {
        $this->c10065 = $c10065;

        return $this;
    }

    public function getC10066(): ?bool
    {
        return $this->c10066;
    }

    public function setC10066(?bool $c10066): self
    {
        $this->c10066 = $c10066;

        return $this;
    }

    public function getC10067(): ?bool
    {
        return $this->c10067;
    }

    public function setC10067(?bool $c10067): self
    {
        $this->c10067 = $c10067;

        return $this;
    }

    public function getC10068(): ?bool
    {
        return $this->c10068;
    }

    public function setC10068(?bool $c10068): self
    {
        $this->c10068 = $c10068;

        return $this;
    }

    public function getC10069(): ?bool
    {
        return $this->c10069;
    }

    public function setC10069(?bool $c10069): self
    {
        $this->c10069 = $c10069;

        return $this;
    }

    public function getC10070(): ?bool
    {
        return $this->c10070;
    }

    public function setC10070(?bool $c10070): self
    {
        $this->c10070 = $c10070;

        return $this;
    }

    public function getC10071(): ?bool
    {
        return $this->c10071;
    }

    public function setC10071(?bool $c10071): self
    {
        $this->c10071 = $c10071;

        return $this;
    }

    public function getC10072(): ?bool
    {
        return $this->c10072;
    }

    public function setC10072(?bool $c10072): self
    {
        $this->c10072 = $c10072;

        return $this;
    }

    public function getC10073(): ?bool
    {
        return $this->c10073;
    }

    public function setC10073(?bool $c10073): self
    {
        $this->c10073 = $c10073;

        return $this;
    }

    public function getC10074(): ?bool
    {
        return $this->c10074;
    }

    public function setC10074(?bool $c10074): self
    {
        $this->c10074 = $c10074;

        return $this;
    }

    public function getC10075(): ?bool
    {
        return $this->c10075;
    }

    public function setC10075(?bool $c10075): self
    {
        $this->c10075 = $c10075;

        return $this;
    }

    public function getC10076(): ?bool
    {
        return $this->c10076;
    }

    public function setC10076(?bool $c10076): self
    {
        $this->c10076 = $c10076;

        return $this;
    }

    public function getC10077(): ?bool
    {
        return $this->c10077;
    }

    public function setC10077(?bool $c10077): self
    {
        $this->c10077 = $c10077;

        return $this;
    }

    public function getC10078(): ?bool
    {
        return $this->c10078;
    }

    public function setC10078(?bool $c10078): self
    {
        $this->c10078 = $c10078;

        return $this;
    }

    public function getC10079(): ?bool
    {
        return $this->c10079;
    }

    public function setC10079(?bool $c10079): self
    {
        $this->c10079 = $c10079;

        return $this;
    }

    public function getC10080(): ?bool
    {
        return $this->c10080;
    }

    public function setC10080(?bool $c10080): self
    {
        $this->c10080 = $c10080;

        return $this;
    }

    public function getC10081(): ?bool
    {
        return $this->c10081;
    }

    public function setC10081(?bool $c10081): self
    {
        $this->c10081 = $c10081;

        return $this;
    }

    public function getC10082(): ?bool
    {
        return $this->c10082;
    }

    public function setC10082(?bool $c10082): self
    {
        $this->c10082 = $c10082;

        return $this;
    }

    public function getC10083(): ?bool
    {
        return $this->c10083;
    }

    public function setC10083(?bool $c10083): self
    {
        $this->c10083 = $c10083;

        return $this;
    }

    public function getC10084(): ?bool
    {
        return $this->c10084;
    }

    public function setC10084(?bool $c10084): self
    {
        $this->c10084 = $c10084;

        return $this;
    }

    public function getC10085(): ?bool
    {
        return $this->c10085;
    }

    public function setC10085(?bool $c10085): self
    {
        $this->c10085 = $c10085;

        return $this;
    }

    public function getC10086(): ?bool
    {
        return $this->c10086;
    }

    public function setC10086(?bool $c10086): self
    {
        $this->c10086 = $c10086;

        return $this;
    }

    public function getC10087(): ?bool
    {
        return $this->c10087;
    }

    public function setC10087(?bool $c10087): self
    {
        $this->c10087 = $c10087;

        return $this;
    }

    public function getC10088(): ?bool
    {
        return $this->c10088;
    }

    public function setC10088(?bool $c10088): self
    {
        $this->c10088 = $c10088;

        return $this;
    }

    public function getC10089(): ?bool
    {
        return $this->c10089;
    }

    public function setC10089(?bool $c10089): self
    {
        $this->c10089 = $c10089;

        return $this;
    }

    public function getC10090(): ?bool
    {
        return $this->c10090;
    }

    public function setC10090(?bool $c10090): self
    {
        $this->c10090 = $c10090;

        return $this;
    }

    public function getC10091(): ?bool
    {
        return $this->c10091;
    }

    public function setC10091(?bool $c10091): self
    {
        $this->c10091 = $c10091;

        return $this;
    }

    public function getC10092(): ?bool
    {
        return $this->c10092;
    }

    public function setC10092(?bool $c10092): self
    {
        $this->c10092 = $c10092;

        return $this;
    }

    public function getC10093(): ?bool
    {
        return $this->c10093;
    }

    public function setC10093(?bool $c10093): self
    {
        $this->c10093 = $c10093;

        return $this;
    }

    public function getC10094(): ?bool
    {
        return $this->c10094;
    }

    public function setC10094(?bool $c10094): self
    {
        $this->c10094 = $c10094;

        return $this;
    }

    public function getC10095(): ?bool
    {
        return $this->c10095;
    }

    public function setC10095(?bool $c10095): self
    {
        $this->c10095 = $c10095;

        return $this;
    }

    public function getC10096(): ?bool
    {
        return $this->c10096;
    }

    public function setC10096(?bool $c10096): self
    {
        $this->c10096 = $c10096;

        return $this;
    }

    public function getC10097(): ?bool
    {
        return $this->c10097;
    }

    public function setC10097(?bool $c10097): self
    {
        $this->c10097 = $c10097;

        return $this;
    }

    public function getC10098(): ?bool
    {
        return $this->c10098;
    }

    public function setC10098(?bool $c10098): self
    {
        $this->c10098 = $c10098;

        return $this;
    }

    public function getC10099(): ?bool
    {
        return $this->c10099;
    }

    public function setC10099(?bool $c10099): self
    {
        $this->c10099 = $c10099;

        return $this;
    }

    public function getC10100(): ?bool
    {
        return $this->c10100;
    }

    public function setC10100(?bool $c10100): self
    {
        $this->c10100 = $c10100;

        return $this;
    }

    public function getC10101(): ?bool
    {
        return $this->c10101;
    }

    public function setC10101(?bool $c10101): self
    {
        $this->c10101 = $c10101;

        return $this;
    }

    public function getC10102(): ?bool
    {
        return $this->c10102;
    }

    public function setC10102(?bool $c10102): self
    {
        $this->c10102 = $c10102;

        return $this;
    }

    public function getC10103(): ?bool
    {
        return $this->c10103;
    }

    public function setC10103(?bool $c10103): self
    {
        $this->c10103 = $c10103;

        return $this;
    }

    public function getC10104(): ?bool
    {
        return $this->c10104;
    }

    public function setC10104(?bool $c10104): self
    {
        $this->c10104 = $c10104;

        return $this;
    }

    public function getC10105(): ?bool
    {
        return $this->c10105;
    }

    public function setC10105(?bool $c10105): self
    {
        $this->c10105 = $c10105;

        return $this;
    }

    public function getC10106(): ?bool
    {
        return $this->c10106;
    }

    public function setC10106(?bool $c10106): self
    {
        $this->c10106 = $c10106;

        return $this;
    }

    public function getC10107(): ?bool
    {
        return $this->c10107;
    }

    public function setC10107(?bool $c10107): self
    {
        $this->c10107 = $c10107;

        return $this;
    }

    public function getC10108(): ?bool
    {
        return $this->c10108;
    }

    public function setC10108(?bool $c10108): self
    {
        $this->c10108 = $c10108;

        return $this;
    }

    public function getC10109(): ?bool
    {
        return $this->c10109;
    }

    public function setC10109(?bool $c10109): self
    {
        $this->c10109 = $c10109;

        return $this;
    }

    public function getC10110(): ?bool
    {
        return $this->c10110;
    }

    public function setC10110(?bool $c10110): self
    {
        $this->c10110 = $c10110;

        return $this;
    }

    public function getC10111(): ?bool
    {
        return $this->c10111;
    }

    public function setC10111(?bool $c10111): self
    {
        $this->c10111 = $c10111;

        return $this;
    }

    public function getC10112(): ?bool
    {
        return $this->c10112;
    }

    public function setC10112(?bool $c10112): self
    {
        $this->c10112 = $c10112;

        return $this;
    }

    public function getC10113(): ?bool
    {
        return $this->c10113;
    }

    public function setC10113(?bool $c10113): self
    {
        $this->c10113 = $c10113;

        return $this;
    }

    public function getC10114(): ?bool
    {
        return $this->c10114;
    }

    public function setC10114(?bool $c10114): self
    {
        $this->c10114 = $c10114;

        return $this;
    }

    public function getC10115(): ?bool
    {
        return $this->c10115;
    }

    public function setC10115(?bool $c10115): self
    {
        $this->c10115 = $c10115;

        return $this;
    }

    public function getC10116(): ?bool
    {
        return $this->c10116;
    }

    public function setC10116(?bool $c10116): self
    {
        $this->c10116 = $c10116;

        return $this;
    }

    public function getC10117(): ?bool
    {
        return $this->c10117;
    }

    public function setC10117(?bool $c10117): self
    {
        $this->c10117 = $c10117;

        return $this;
    }

    public function getC10118(): ?bool
    {
        return $this->c10118;
    }

    public function setC10118(?bool $c10118): self
    {
        $this->c10118 = $c10118;

        return $this;
    }

    public function getC10119(): ?bool
    {
        return $this->c10119;
    }

    public function setC10119(?bool $c10119): self
    {
        $this->c10119 = $c10119;

        return $this;
    }

    public function getC10120(): ?bool
    {
        return $this->c10120;
    }

    public function setC10120(?bool $c10120): self
    {
        $this->c10120 = $c10120;

        return $this;
    }

    public function getC10121(): ?bool
    {
        return $this->c10121;
    }

    public function setC10121(?bool $c10121): self
    {
        $this->c10121 = $c10121;

        return $this;
    }

    public function getC10122(): ?bool
    {
        return $this->c10122;
    }

    public function setC10122(?bool $c10122): self
    {
        $this->c10122 = $c10122;

        return $this;
    }

    public function getC10123(): ?bool
    {
        return $this->c10123;
    }

    public function setC10123(?bool $c10123): self
    {
        $this->c10123 = $c10123;

        return $this;
    }

    public function getC10124(): ?bool
    {
        return $this->c10124;
    }

    public function setC10124(?bool $c10124): self
    {
        $this->c10124 = $c10124;

        return $this;
    }

    public function getC10125(): ?bool
    {
        return $this->c10125;
    }

    public function setC10125(?bool $c10125): self
    {
        $this->c10125 = $c10125;

        return $this;
    }

    public function getC10126(): ?bool
    {
        return $this->c10126;
    }

    public function setC10126(?bool $c10126): self
    {
        $this->c10126 = $c10126;

        return $this;
    }

    public function getC10127(): ?bool
    {
        return $this->c10127;
    }

    public function setC10127(?bool $c10127): self
    {
        $this->c10127 = $c10127;

        return $this;
    }

    public function getC10128(): ?bool
    {
        return $this->c10128;
    }

    public function setC10128(?bool $c10128): self
    {
        $this->c10128 = $c10128;

        return $this;
    }

    public function getC10129(): ?bool
    {
        return $this->c10129;
    }

    public function setC10129(?bool $c10129): self
    {
        $this->c10129 = $c10129;

        return $this;
    }

    public function getC10130(): ?bool
    {
        return $this->c10130;
    }

    public function setC10130(?bool $c10130): self
    {
        $this->c10130 = $c10130;

        return $this;
    }

    public function getC10131(): ?bool
    {
        return $this->c10131;
    }

    public function setC10131(?bool $c10131): self
    {
        $this->c10131 = $c10131;

        return $this;
    }

    public function getC10132(): ?bool
    {
        return $this->c10132;
    }

    public function setC10132(?bool $c10132): self
    {
        $this->c10132 = $c10132;

        return $this;
    }

    public function getC10133(): ?bool
    {
        return $this->c10133;
    }

    public function setC10133(?bool $c10133): self
    {
        $this->c10133 = $c10133;

        return $this;
    }

    public function getC10134(): ?bool
    {
        return $this->c10134;
    }

    public function setC10134(?bool $c10134): self
    {
        $this->c10134 = $c10134;

        return $this;
    }

    public function getC10135(): ?bool
    {
        return $this->c10135;
    }

    public function setC10135(?bool $c10135): self
    {
        $this->c10135 = $c10135;

        return $this;
    }

    public function getC10136(): ?bool
    {
        return $this->c10136;
    }

    public function setC10136(?bool $c10136): self
    {
        $this->c10136 = $c10136;

        return $this;
    }

    public function getC10137(): ?bool
    {
        return $this->c10137;
    }

    public function setC10137(?bool $c10137): self
    {
        $this->c10137 = $c10137;

        return $this;
    }

    public function getC10138(): ?bool
    {
        return $this->c10138;
    }

    public function setC10138(?bool $c10138): self
    {
        $this->c10138 = $c10138;

        return $this;
    }

    public function getC10139(): ?bool
    {
        return $this->c10139;
    }

    public function setC10139(?bool $c10139): self
    {
        $this->c10139 = $c10139;

        return $this;
    }

    public function getC10140(): ?bool
    {
        return $this->c10140;
    }

    public function setC10140(?bool $c10140): self
    {
        $this->c10140 = $c10140;

        return $this;
    }

    public function getC10141(): ?bool
    {
        return $this->c10141;
    }

    public function setC10141(?bool $c10141): self
    {
        $this->c10141 = $c10141;

        return $this;
    }

    public function getC10142(): ?bool
    {
        return $this->c10142;
    }

    public function setC10142(?bool $c10142): self
    {
        $this->c10142 = $c10142;

        return $this;
    }

    public function getC10143(): ?bool
    {
        return $this->c10143;
    }

    public function setC10143(?bool $c10143): self
    {
        $this->c10143 = $c10143;

        return $this;
    }

    public function getC10144(): ?bool
    {
        return $this->c10144;
    }

    public function setC10144(?bool $c10144): self
    {
        $this->c10144 = $c10144;

        return $this;
    }

    public function getC10145(): ?bool
    {
        return $this->c10145;
    }

    public function setC10145(?bool $c10145): self
    {
        $this->c10145 = $c10145;

        return $this;
    }

    public function getC10146(): ?bool
    {
        return $this->c10146;
    }

    public function setC10146(?bool $c10146): self
    {
        $this->c10146 = $c10146;

        return $this;
    }

    public function getC10147(): ?bool
    {
        return $this->c10147;
    }

    public function setC10147(?bool $c10147): self
    {
        $this->c10147 = $c10147;

        return $this;
    }

    public function getC10148(): ?bool
    {
        return $this->c10148;
    }

    public function setC10148(?bool $c10148): self
    {
        $this->c10148 = $c10148;

        return $this;
    }

    public function getC10149(): ?bool
    {
        return $this->c10149;
    }

    public function setC10149(?bool $c10149): self
    {
        $this->c10149 = $c10149;

        return $this;
    }

    public function getC10150(): ?bool
    {
        return $this->c10150;
    }

    public function setC10150(?bool $c10150): self
    {
        $this->c10150 = $c10150;

        return $this;
    }

    public function getC10151(): ?bool
    {
        return $this->c10151;
    }

    public function setC10151(?bool $c10151): self
    {
        $this->c10151 = $c10151;

        return $this;
    }

    public function getC10152(): ?bool
    {
        return $this->c10152;
    }

    public function setC10152(?bool $c10152): self
    {
        $this->c10152 = $c10152;

        return $this;
    }

    public function getC10153(): ?bool
    {
        return $this->c10153;
    }

    public function setC10153(?bool $c10153): self
    {
        $this->c10153 = $c10153;

        return $this;
    }

    public function getC10154(): ?bool
    {
        return $this->c10154;
    }

    public function setC10154(?bool $c10154): self
    {
        $this->c10154 = $c10154;

        return $this;
    }

    public function getC10155(): ?bool
    {
        return $this->c10155;
    }

    public function setC10155(?bool $c10155): self
    {
        $this->c10155 = $c10155;

        return $this;
    }

    public function getC10156(): ?bool
    {
        return $this->c10156;
    }

    public function setC10156(?bool $c10156): self
    {
        $this->c10156 = $c10156;

        return $this;
    }

    public function getC10157(): ?bool
    {
        return $this->c10157;
    }

    public function setC10157(?bool $c10157): self
    {
        $this->c10157 = $c10157;

        return $this;
    }

    public function getC10158(): ?bool
    {
        return $this->c10158;
    }

    public function setC10158(?bool $c10158): self
    {
        $this->c10158 = $c10158;

        return $this;
    }

    public function getC10159(): ?bool
    {
        return $this->c10159;
    }

    public function setC10159(?bool $c10159): self
    {
        $this->c10159 = $c10159;

        return $this;
    }

    public function getC10160(): ?bool
    {
        return $this->c10160;
    }

    public function setC10160(?bool $c10160): self
    {
        $this->c10160 = $c10160;

        return $this;
    }

    public function getC10161(): ?bool
    {
        return $this->c10161;
    }

    public function setC10161(?bool $c10161): self
    {
        $this->c10161 = $c10161;

        return $this;
    }

    public function getC10162(): ?bool
    {
        return $this->c10162;
    }

    public function setC10162(?bool $c10162): self
    {
        $this->c10162 = $c10162;

        return $this;
    }

    public function getC10163(): ?bool
    {
        return $this->c10163;
    }

    public function setC10163(?bool $c10163): self
    {
        $this->c10163 = $c10163;

        return $this;
    }

    public function getC10164(): ?bool
    {
        return $this->c10164;
    }

    public function setC10164(?bool $c10164): self
    {
        $this->c10164 = $c10164;

        return $this;
    }

    public function getC5002(): ?bool
    {
        return $this->c5002;
    }

    public function setC5002(?bool $c5002): self
    {
        $this->c5002 = $c5002;

        return $this;
    }

    public function getC5003(): ?bool
    {
        return $this->c5003;
    }

    public function setC5003(?bool $c5003): self
    {
        $this->c5003 = $c5003;

        return $this;
    }

    public function getC5004(): ?bool
    {
        return $this->c5004;
    }

    public function setC5004(?bool $c5004): self
    {
        $this->c5004 = $c5004;

        return $this;
    }

    public function getC5005(): ?bool
    {
        return $this->c5005;
    }

    public function setC5005(?bool $c5005): self
    {
        $this->c5005 = $c5005;

        return $this;
    }

    public function getC5006(): ?bool
    {
        return $this->c5006;
    }

    public function setC5006(?bool $c5006): self
    {
        $this->c5006 = $c5006;

        return $this;
    }

    public function getC5007(): ?bool
    {
        return $this->c5007;
    }

    public function setC5007(?bool $c5007): self
    {
        $this->c5007 = $c5007;

        return $this;
    }

    public function getC5008(): ?bool
    {
        return $this->c5008;
    }

    public function setC5008(?bool $c5008): self
    {
        $this->c5008 = $c5008;

        return $this;
    }

    public function getC11000(): ?bool
    {
        return $this->c11000;
    }

    public function setC11000(?bool $c11000): self
    {
        $this->c11000 = $c11000;

        return $this;
    }

    public function getC11001(): ?bool
    {
        return $this->c11001;
    }

    public function setC11001(?bool $c11001): self
    {
        $this->c11001 = $c11001;

        return $this;
    }

    public function getC11002(): ?bool
    {
        return $this->c11002;
    }

    public function setC11002(?bool $c11002): self
    {
        $this->c11002 = $c11002;

        return $this;
    }

    public function getC11003(): ?bool
    {
        return $this->c11003;
    }

    public function setC11003(?bool $c11003): self
    {
        $this->c11003 = $c11003;

        return $this;
    }

    public function getC11010(): ?bool
    {
        return $this->c11010;
    }

    public function setC11010(?bool $c11010): self
    {
        $this->c11010 = $c11010;

        return $this;
    }

    public function getC11011(): ?bool
    {
        return $this->c11011;
    }

    public function setC11011(?bool $c11011): self
    {
        $this->c11011 = $c11011;

        return $this;
    }

    public function getC11012(): ?bool
    {
        return $this->c11012;
    }

    public function setC11012(?bool $c11012): self
    {
        $this->c11012 = $c11012;

        return $this;
    }


}
