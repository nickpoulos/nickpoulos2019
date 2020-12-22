<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function gift(string $code)
    {
        switch ($code) {
            case 'jhSFdfg763425rkljdhsfg40':
                $data = [
                    'name' => 'I Hou',
                    'image' => '1.png',
                    'card' => 'http://url4659.orders.vanillagift.com/ls/click?upn=U2P5Ajr08VYowHG6FTmJsBG-2BZNcUFYVeU4ubXsSvsZBD5uYN1I7cJjk-2BzOYa0TCJrlt-2BdCID9sslm52hQsPsHTJtU3JCuV7MdDRIXXIUY-2F1bM0jobOV5Bl3kL070EUEEmkm2paO5W5oVmnFYGzb7o9XC1My98fNPBZDV7oVfp4RrTWYeZbn9-2BEwArArFLCN-2FhThxvVY0NQ0QK-2BZ1eGHvWTX4Vkt26F9c-2BGy4ZuhJavD4NTDmHQmP5Xgr1mddIqMTa-2BlKnfHsb9UisxORx6bmNYPDeRXM0K5makGG9VprzwDRzY4TNojdz9fr0V66s8z9e1xhV-2FLHcWGp5CdqoXo4wnWziKvbJAspL4EX00pNcFsuULoS8Nvmb4nzb8xS0KIGYCjUiVbgCOuRWWG-2F0Si5jg-3D-3D5SxX_3QVfHlnFRnfRuEJx2HTkP58AIHaffLtDUAEqZWj7Yzb2wPeL5Wp39epOgFkytf1-2B1EPy21qYyapGzBk-2BoHx6oNjmZ7pp24R00-2FC7j-2FUY9vLX9h8ZyDXuZybarA0qBShQzA7waPpgBqJCHLsjOoWAUe47Xm-2Fv3IpmFTnid3BjQ5VOjpkEjbxirOLWjMOCUL4xXokMfj0ka5-2FQ-2BRRidJ5nVTI-2F9jf83ljyQgxHZZk48sydlnBf-2Bta3IvRs9rDLVhcfcntrKisDyUgNVTg7VN6-2Fzw-3D-3D'
                ];
            break;
            case '9lmSJfgndbSHfgrdz784HJKg':
                $data = [
                    'name' => 'Marc',
                    'image' => '2.png',
                    'card' => 'http://url4659.orders.vanillagift.com/ls/click?upn=U2P5Ajr08VYowHG6FTmJsBG-2BZNcUFYVeU4ubXsSvsZBD5uYN1I7cJjk-2BzOYa0TCJrlt-2BdCID9sslm52hQsPsHcbSoWDSqlQR2z25wApwM-2F-2FDmvO84WC47RpcK4teM9uJUI6hdJkOvIgUlDF1j2ghhhSs2tIGjR02oNWiHePuL6VHRAxB-2FKAOvx26SUKqboMKzfs5Agr8h5Qk8PWSrBviw9zn-2FMZS-2FgExyCEmUBvbkasuN9c8PiJvRaXlCHVl8c42zT6w-2F29aNzmk2CXZ7eljdybOIPoSbBZTakWyiFpyxfJS-2B4ldl3RMffB-2F5qFTeW9BM834pp-2FScYm4OnxulZ3-2BKZLhQ3KRb-2FIoHfDrOgqkmn9uzf9sZWElIKJST8l4bYlAVPdAoFQoAVEPBZFfiiN7vg-3D-3DnGmI_3QVfHlnFRnfRuEJx2HTkP58AIHaffLtDUAEqZWj7Yzb2wPeL5Wp39epOgFkytf1-2B1EPy21qYyapGzBk-2BoHx6oH1AUwB0COs6PgzTnwV994K4V43L04tpovF6TXtKvHq3SVdDgbCahQelD6A5SsXQzrmIEVFPgToSrZwz4iZL6ENUwoLOvWPpzSNq4qTp8G10n0hmD2f4NgicvK4B7MyFKB6ucL8wNtlBLWyH-2FR1AQvo4q6zOZ32GVcdTSGRR-2FLgCQwjMgM6BSEbGj8MZN-2FIIqQ-3D-3D'
                ];
                break;
            case 'LhjgfJgndphj48dj5bdGS73h':
                $data = [
                    'name' => 'Wendy',
                    'image' => '3.png',
                    'card' => 'http://url4659.orders.vanillagift.com/ls/click?upn=U2P5Ajr08VYowHG6FTmJsBG-2BZNcUFYVeU4ubXsSvsZBD5uYN1I7cJjk-2BzOYa0TCJrlt-2BdCID9sslm52hQsPsHdOQxy29ZkAab9VPlknphzen59MBmqFS6RvlxMo8znXoqcC7u8eiXQ-2BE7G0xdv9-2FcMuiJACJEEwTagx4pGGEXF5406fA-2FU4Zwmlbx0PNa6xvGYf6Z-2Ff2Xt1l9xibUG883yl4v9VCtVMpqKRkTKo-2BUadA7YPnHfLRl5IPgjA5AjL32cMBYBmePfE1NWyTOIsZUEd-2BeD9YGxZ-2F2Str8JIgZkzUHvNiXRD2JLSmFIY-2BucxQG2xq6KMe9l2p4cWqG2I7Xu9aYihjfR9CL054o-2BAVm9uGyfncQz63su1TAsnEoTORxRQDb-2BUVZBwNaJVoz7MJgQ-3D-3D8RD0_3QVfHlnFRnfRuEJx2HTkP58AIHaffLtDUAEqZWj7Yzb2wPeL5Wp39epOgFkytf1-2B1EPy21qYyapGzBk-2BoHx6oF-2BP9Zb4j9MW8QBe0nJzYx5br3hMgdlfugZqfjVtwZ1QfztgKldHU6fUWyE8K4jOKiN4WIMGpWtSaCP-2BoeMdfPnE77SKpcNLKqkstqAGGGaysAmS9kIBjAx982bSj78m7wYUr9Ljs4ki-2F0PqEzWQSdP3iB1191j-2FKwpJdz6JVtNg6ygiNmmqvbmcLJguYdfU-2BA-3D-3D'
                ];
                break;
            case 'gnJhnHhjefh7696bspwHIkOK':
                $data = [
                    'name' => 'Will',
                    'image' => '4.png',
                    'card' => 'http://url4659.orders.vanillagift.com/ls/click?upn=U2P5Ajr08VYowHG6FTmJsBG-2BZNcUFYVeU4ubXsSvsZBD5uYN1I7cJjk-2BzOYa0TCJrlt-2BdCID9sslm52hQsPsHdfTbuRMKsIBF-2Bd1vq7lPa5DWuupw2i3mNsU3Wj96EVOQWDD4WYZSJlaKrzP-2F8Z9XC1pYbly-2BDIhAJOw8Q-2B44NUsQJkOFXVEuoBAk86Xt-2FjnW-2FcNHR7wISagfM5IFj3IM4OaUJ9PAO5oG6zcDuOMpyQTv71-2FhQKnip0OTgmXDAAvo8TDfD5p3pHteImufwDX5lWe6-2Bl5USOQMR7FZHSllgZapXPAlwUnzfk3v0-2BZEvT1yIiim1IntUSu-2Bt5uArizWO33Q81ZS24wZ-2B8dBamRob7XOSZ5R-2FY-2BAYvOVicel60-2BvDO6Yy7xFMMV4ja24eSspA-3D-3DFWGb_3QVfHlnFRnfRuEJx2HTkP58AIHaffLtDUAEqZWj7Yzb2wPeL5Wp39epOgFkytf1-2B1EPy21qYyapGzBk-2BoHx6oI28iYCHEpoo4KZXEu2sTaXswbIA1NJOiUyNi6CeLTypVb5aJi-2FR-2FWzKJw6cFc-2F3lxy8ZnMd-2FOvwimEzElN1zOQ3khkZ7j2W6Qo-2F3M-2BXUiljPs-2B43gsLL30cgxDvxnZ2d6Q1QNAson5VcRtJ-2BsmhfaN3XPtDyGNykRt41Km0fUI4aFg-2BRXbkthwmjR2OdzHBmw-3D-3D'
                ];
                break;
            default:
                abort(404);
        }

        return view('extras.gift', compact('data'));
    }
}
