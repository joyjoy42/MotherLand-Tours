<div class="premium-card" style="padding: 0; overflow: hidden; border: none;">
    <div style="background: var(--color-mother-navy); color: white; padding: 32px 48px; display: flex; justify-content: space-between; align-items: center;">
        <h3 style="font-size: 1.8rem; text-transform: uppercase; color: white;">Pack {{ $days }} Jours</h3>
        <span style="background: rgba(255,255,255,0.1); padding: 8px 20px; border-radius: 100px; font-size: 0.85rem; font-weight: 600;">Tout Inclus</span>
    </div>
    
    <div style="padding: 48px;">
        <!-- Premium Price Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; margin-bottom: 48px;">
            <div style="background: var(--gray-light); padding: 32px; text-align: center; border-radius: var(--radius-md); border: 2px solid transparent; transition: 0.3s;">
                <div style="font-weight: 800; font-size: 2.2rem; font-family: 'Outfit'; color: var(--color-mother-navy); margin-bottom: 8px;">{{ $prices[0] }}</div>
                <div style="font-size: 0.9rem; color: #64748b; font-weight: 600;">1 Voyageur</div>
            </div>
            <div style="background: #fff5ed; padding: 32px; text-align: center; border-radius: var(--radius-md); border: 2px solid var(--color-mother-terracotta); transform: scale(1.05); box-shadow: var(--shadow-ambient);">
                <div style="font-weight: 800; font-size: 2.2rem; font-family: 'Outfit'; color: var(--color-mother-terracotta); margin-bottom: 8px;">{{ $prices[1] }}</div>
                <div style="font-size: 0.9rem; color: var(--color-mother-terracotta); font-weight: 700;">2 Voyageurs</div>
                <div style="margin-top: 12px;"><span class="badge-yellow" style="font-size: 0.65rem;">Recommandé</span></div>
            </div>
            <div style="background: var(--gray-light); padding: 32px; text-align: center; border-radius: var(--radius-md); border: 2px solid transparent; transition: 0.3s;">
                <div style="font-weight: 800; font-size: 2.2rem; font-family: 'Outfit'; color: var(--color-mother-navy); margin-bottom: 8px;">{{ $prices[2] }}</div>
                <div style="font-size: 0.9rem; color: #64748b; font-weight: 600;">3+ Voyageurs</div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 48px;">
            <div>
                <h4 style="margin-bottom: 24px; font-family: 'Outfit'; display: flex; align-items: center; gap: 12px;">
                    <span style="width: 32px; height: 32px; background: #ecfdf5; color: #10b981; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fas fa-check"></i></span>
                    Services Inclus
                </h4>
                <ul style="list-style: none; font-size: 0.95rem; color: #475569;">
                    @if($flights ?? false) <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-plane" style="color: var(--primary); font-size: 0.8rem;"></i> Vol Aller-Retour & Taxes</li> @endif
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-bed" style="color: var(--primary); font-size: 0.8rem;"></i> Hébergement Premium</li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-car-side" style="color: var(--primary); font-size: 0.8rem;"></i> Chauffeur & Véhicule Climatisé</li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-user-tie" style="color: var(--primary); font-size: 0.8rem;"></i> Guide Expert Francophone</li>
                    <li style="display: flex; align-items: center; gap: 12px;"><i class="fas fa-ticket-alt" style="color: var(--primary); font-size: 0.8rem;"></i> Entrées sur tous les sites</li>
                </ul>
            </div>
            <div>
                <h4 style="margin-bottom: 24px; font-family: 'Outfit'; display: flex; align-items: center; gap: 12px;">
                    <span style="width: 32px; height: 32px; background: #fef2f2; color: #ef4444; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fas fa-times"></i></span>
                    Non Inclus
                </h4>
                <ul style="list-style: none; font-size: 0.95rem; color: #475569;">
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-utensils" style="color: #94a3b8; font-size: 0.8rem;"></i> Repas du soir & Boissons</li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;"><i class="fas fa-umbrella-beach" style="color: #94a3b8; font-size: 0.8rem;"></i> Activités optionnelles</li>
                    <li style="display: flex; align-items: center; gap: 12px;"><i class="fas fa-piggy-bank" style="color: #94a3b8; font-size: 0.8rem;"></i> Dépenses personnelles & Pourboires</li>
                </ul>
            </div>
        </div>

        <div style="margin-top: 48px; background: #feffed; border-radius: var(--radius-md); padding: 32px; border-left: 6px solid var(--color-benin-yellow);">
            <div style="display: flex; gap: 24px; align-items: flex-start;">
                <div style="font-size: 1.5rem; color: #854d0e;"><i class="fas fa-info-circle"></i></div>
                <div>
                    <h4 style="font-size: 1rem; margin-bottom: 8px; color: #854d0e;">Conditions de réservation</h4>
                    <p style="font-size: 0.9rem; color: #a16207; line-height: 1.6;">Acompte de 30% à la réservation. Solde à régler 21 jours avant le départ. Annulation gratuite jusqu'à 30 jours avant le début du séjour.</p>
                </div>
            </div>
        </div>
        
        <div style="margin-top: 48px; text-align: center;">
            <a href="/reserver" class="btn btn-primary" style="padding: 18px 48px;">RÉSERVER CE PACK</a>
        </div>
    </div>
</div>
